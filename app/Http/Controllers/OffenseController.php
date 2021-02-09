<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offense;
use App\Student;
use App\Category;

class OffenseController extends Controller
{
     //offense
     public function ListOffense()
    {
       $data['offense']=Offense::join('offense_category','offense.no_category','=','offense_category.id')
       ->join('students','offense.no_student','=','students.id')
       ->get();
        return view('offense.list-offense',$data);
    }
    public function AddOffense(){
        $data['student']=Student::all();
        $data['offense_category']=Category::all();
        return view('offense.add-offense',$data);
         
    }
    public function SaveAddOffense(Request $request)
    {
        $cat = Category::whereId($request->input('offense_category_id'))->first();
        $create = new Offense;
        $create->no_student = $request->input('nama_siswa_id');
        $create->no_category = $cat->id;
        $create->total_point = $cat->point;
        $create->save();
        return redirect('/admin/list-offense')->withSuccess($request->input('nama_siswa').' Berhasil Ditambahkan');
    }
      public function EditListOffense()
    {
        return back()->withSuccess('Edit Berhasil');
    }
}
