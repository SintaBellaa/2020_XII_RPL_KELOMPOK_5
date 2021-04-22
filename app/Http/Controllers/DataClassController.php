<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use RealRashid\SweetAlert\Facades\Alert;
use App\ClassModel;
use DataTables;
use App\Major;
use App\GradeLevel;

class DataClassController extends Controller
{


  private function gradeLevels()
  {
    $grade = GradeLevel::latest()->get();

    return $grade;
  }

    private function major()
    {
      $major = Major::groupBy('mjr_name')->get();
  
      return $major;
    }

   public function class()
    
    {
        $class = ClassModel::join('majors', 'class.cls_major_id', '=', 'majors.mjr_id')
        ->join('grade_levels', 'class.cls_grade_level_id', '=', 'grade_levels.grd_id')
        ->select(
            'class.*',
            'majors.*',
            'grade_levels.*',
            'class.cls_id as id_class'
        )
        ->get();

      
        return $class;

    }

   public function index(Request $request)
    {

      $base = $this->base64();

       if ($request->ajax()) {
            
            $data = $this->class();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data) use ($base) {
                           return '<a href="'.url('/classes/EditClass',$base->encrypt($data->cls_id)).'" class="btn btn-primary waves-effect waves-light m-1"><i data-toggle="tooltip" data-placement="top" title="Edit" aria-hidden="true" class="fa fa-edit fa-lg"></i></a>' . '&nbsp' . '<a href="'.url('/classes/delete', $base->encrypt($data->cls_id)).'" class="btn btn-danger waves-effect waves-light m-1"> <i aria-hidden="true" class="fa fa-trash fa-lg"></i></a>';
                    })
                    ->rawColumns(['action'])
                    ->make(true);
              }

       return view('ClassView.list-class');
    }

    public function AddClass()
    {
       $data['major']       = $this->major();
       $data['gradeLevels'] = $this->gradeLevels();

   	  return view('ClassView.add-class', $data);
	 }

   public function StoreClass(Request $request)
   {


      $count = ClassModel::where('cls_major_id', $request->cls_major_id)
      ->where('cls_grade_level_id', $request->cls_grade_level_id)->count();

      if ($count == 0 ) {
        
        $class = new ClassModel;
        $class->cls_major_id           = $request->cls_major_id;
        $class->cls_grade_level_id     = $request->cls_grade_level_id;
        $class->cls_number             = $request->cls_number;
        $class->save();

        return redirect('/classes/list-class')->withSuccess('Tambah Data Berhasil');

      } else {
        return redirect('/classes/list-class')->withWarning('Jurusan Dan Tingkatan Sudah Tersedia');
      }

   }

   public function EditClass($class_id)
   {

       $base = $this->base64();

       $data['major']       = $this->major();
       $data['gradeLevels'] = $this->gradeLevels();


       $data['class'] = ClassModel::whereClsId($base->decrypt($class_id))->first();


        if ($data['class']) {       
            return view('ClassView.edit-class', $data);
  
        } else {
          abort(403);
        }

   }

   public function UpdateClass(Request $request, $cls_id)
     { 
        $base = $this->base64();
      $count = ClassModel::where('cls_major_id', $request->cls_major_id)
      ->where('cls_grade_level_id', $request->cls_grade_level_id)->count();

      if ($count == 0 ) {

        $class = ClassModel::whereClsId($base->decrypt($class_id))->first();
        $class->cls_major_id           = $request->cls_major_id;
        $class->cls_grade_level_id     = $request->cls_grade_level_id;
        $class->cls_number             = $request->cls_number;
        $class->save();

        return redirect('/classes/list-class')->withSuccess('Ubah Data Berhasil');
      
      } else {
        return redirect('/classes/list-class')->withWarning('Jurusan Dan Tingkatan Sudah Tersedia');
      }

     }


	 public function DeleteClass($cls_id)
     {
       $base = $this->base64();

        $delete =  ClassModel::whereClsId($base->decrypt($class_id))->delete();

        if ($delete) {
          return back()->withToastSuccess('Berhasil dihapus');
        } else {
          return back()->withToastWarning('Gagal Dihapus');
        }
     
      }
  }

