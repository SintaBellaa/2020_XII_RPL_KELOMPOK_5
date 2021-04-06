<?php

namespace App\Http\Controllers;

use App\OffenseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Offense;
use App\Student;
use App\Category;
use DataTables;
use App\User;
use Carbon\Carbon;
class OffenseController extends Controller
{
    //offense
    public function ListOffense(Request $request)
    {
      if ($request->ajax()) {
          $data = User::role('student')->join('students', 'users.usr_id', 'students.stu_user_id')
            ->join('offenses', 'students.stu_id', '=', 'offenses.ofs_student_id')
            ->join('offense_categories', 'offenses.ofs_offense_category_id', '=', 'offense_categories.ofc_id')
            ->select('users.*',
                'students.*',
                'offenses.*',
                'offenses.ofs_id as id_ofs',
                'offense_categories.*')->get();

          return Datatables::of($data)
                  ->addColumn('action', function($data){
                          return '<a href="'.url('admin/edit-offense', $data->id_ofs).'" class="btn btn-primary waves-effect waves-light m-1"><i data-toggle="tooltip" data-placement="top" title="Edit" aria-hidden="true" class="fa fa-edit fa-lg"></i></a>' . '&nbsp' . '<a href="'.url('admin/delete', $data->id_ofs).'" class="btn btn-danger waves-effect waves-light m-1"> <i aria-hidden="true" class="fa fa-trash fa-lg"></i></a>';
                  })
                  ->editColumn('ofc_point', function($data){
                      if ( $data->ofc_point >= 40 && $data->ofc_point < 60) {
                          return '<span _ngcontent-aos-c153="" class="badge badge-warning m-1">'.$data->ofc_point.' SP 1</span>';
                      } else if ( $data->ofc_point >= 60 && $data->ofc_point < 100 ) {
                         return '<span _ngcontent-aos-c153="" class="badge badge-warning m-1">'.$data->ofc_point.' SP 2</span>';
                      }  else if( $data->ofc_point == 100 ) {
                        return '<span _ngcontent-aos-c153="" class="badge badge-danger m-1">'.$data->ofc_point.' SP 3</span>';
                      } else if( $data->ofc_point >= 1 && $data->ofc_point < 40) {
                          return '<span _ngcontent-aos-c153="" class="badge badge-success m-1">'.$data->ofc_point.' Pelanggaran Ringan</span>';
                      }
                  })
                  ->editColumn('ofs_date', function($data){
                        return Carbon::parse($data->ofs_date)->translatedFormat('l, d F Y');
                  })
                  
                  ->addIndexColumn()
                  ->rawColumns(['action','ofc_point', 'ofs_date'])
                  ->make(true);
     }
  
        return view('offense.list-offense');
    }

    //baru sampe ubah
    public function AddOffense()
    {
        $data['student'] = User::role('student')->join('students', 'users.usr_id', 'students.stu_user_id')
            ->get();

        $data['offense_category'] = OffenseCategory::all();
        return view('offense.add-offense', $data);

    }

    public function SaveAddOffense(Request $request)
    {
        $cat = OffenseCategory::whereOfcId($request->input('offense_category_id'))->first();
        $create = new Offense;
        $create->ofs_student_id = $request->input('nama_siswa_id');
        $create->ofs_offense_category_id = $cat->ofc_id;
        $create->ofs_date = now();

        $create->save();

        $student = Student::whereStuId($request->input('nama_siswa_id'))->first();
        $student->stu_point = $student->stu_point  += $cat->ofc_point;
        $student->save();
        return redirect('/admin/list-offense')->withSuccess($request->input('nama_siswa') . ' Berhasil Ditambahkan');
    }

    public function EditOffense($ofs_id)
    {
        $data ['offense'] = User::role('student')->join('students', 'users.usr_id', 'students.stu_user_id')
        ->join('offenses', 'students.stu_id', '=', 'offenses.ofs_student_id')
        ->join('offense_categories', 'offenses.ofs_offense_category_id', '=', 'offense_categories.ofc_id')
        ->select('users.*',
            'students.*',
            'offenses.*',
            'offenses.ofs_id as id_ofs',
            'offense_categories.*',
            'offense_categories.ofc_id as id_ofc')
        ->where('offenses.ofs_id', $ofs_id)->first();

        $data ['student'] = Student::join('users' ,'students.stu_user_id' , '=' , 'users.usr_id')
            ->get();
        $data ['offense_cat'] = OffenseCategory::all();
        //return $data ['offense'];
        return view('offense.edit-offense', $data);
    }

    public function UpdateOffense(Request $request, $ofs_id)
    {
        //return ($request);
        $data = Offense::whereOfsId($ofs_id)->first();
        $data->ofs_student_id = $request->input('userId');
        $data->ofs_offense_category_id = $request->input('catId');
        $data->save();
        return redirect('/admin/list-offense')->withSuccess('Edit Berhasil');
    }

      public function DeleteOffense($ofs_id)
     {
        // dd($ofs_id);
        // $data = Offense::where('ofs_id' , $ofs_id)->first();
        // dd($data);
           
         $data = Offense::whereOfsId($ofs_id)->first();
         if ($data != NULL) {
             $data->delete();
             return back()->withToastSuccess('Berhasil dihapus');
         }
         return back()->withToastError('terjadi kesalahan sistem');
         
     }
}

