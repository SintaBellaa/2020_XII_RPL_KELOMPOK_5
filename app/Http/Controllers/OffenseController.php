<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Offense;
use App\Student;
use App\Category;

use App\User;
class OffenseController extends Controller
{
     //offense
     public function ListOffense()
    {
        $data['offense'] = User::role('student')->join('students', 'users.usr_id', 'students.stu_user_id')
        ->join('offenses', 'students.stu_id', '=', 'offenses.ofs_student_id')
        ->join('offense_categories', 'offenses.ofs_offense_category_id', '=', 'offense_categories.ofc_id')
        ->select('users.*',
          'students.*',
          'offenses.*',
          'offenses.ofs_id as id_ofs',
          'offense_categories.*')->get();
        return view('offense.list-offense', $data);
    }

    //baru sampe ubah
    public function AddOffense(){
        $data['student'] = User::role('student')->join('students', 'users.usr_id', 'students.stu_user_id')
        ->get();
        
        $data['offense_category'] = Category::all();
        return view('offense.add-offense',$data);
      
    }
    public function SaveAddOffense(Request $request)
    {
        $cat = Category::whereOffenseCategoryId($request->input('offense_category_id'))->first();
        $create              = new Offense;
        $create->ofs_student_id  = $request->input('nama_siswa_id');
        $create->ofs_offense_category_id = $cat->ofs_offense_category_id;
        $create->total_point = $cat->point;
        $create->save();
        return redirect('/admin/list-offense')->withSuccess($request->input('nama_siswa').' Berhasil Ditambahkan');
    }
      public function EditOffense($ofs_id)
    {

      $offense = offense::join('students','students.stu_id', '=', 'offenses.ofs_student_id')
                 ->join('offense_categories', 'offense_categories.ofc_id', '=', 'offenses.ofs_offense_category_id')->where('offenses.ofs_id', $ofs_id)->get();
       return view('offense.edit-offense',['offense'=>$offense]);
    }

     public function UpdateOffense(Request $request,$ofs_id)
     {  
       //dd($request);
         $data = Offense::whereOfsId($id)->first();
         $data->ofs_student_id = $request->input('ofs_student_id');
         $data->ofs_offense_category_id  = $request->input('ofs_offense_category_id');
        $data->save();
         return redirect('/admin/list-offense')->withSuccess('Edit Berhasil');
     }

}

