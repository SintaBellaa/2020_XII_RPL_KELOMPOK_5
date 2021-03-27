<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use RealRashid\SweetAlert\Facades\Alert;
use App\ClassModel;

class DataClassController extends Controller
{

   function class()
    {
        $class = ClassModel::join('majors', 'class.cls_major_id', '=', 'majors.mjr_id')
        ->join('grade_levels', 'class.cls_grade_level_id', '=', 'grade_levels.grd_id')
        ->select(
            'class.*',
            'majors.*',
            'grade_levels.*',
            'class.cls_id as id_class'
        )->get();

        return $class;

    }


   public function index()
    {
     
     	 $class['class'] = $this->class();

       return view('ClassView.list-class' , $class);
    }

    public function AddClass()
    {
       $data['class'] = $this->class();
   	return view('ClassView.add-class');
	 }

   public function StoreClass(Request $request)
   {
      $class = new ClassModel;
      $class->cls_major_id  = $request->mjr_name;
      $class->cls_grade_level_id = $request->grd_name;
      $class->cls_number  = $request->cls_number;
      $class->save();


      return redirect('/classes/list-class')->withSuccess('Tambah Data Berhasil');
   }

   public function EditClass()
   {
    $data['class'] = $this->class();
    return view('ClassView.edit');
    
   }

   public function UpdateClass(Request $request,$cls_id)
     {
        DB::table('class')->where('cls_id',$cls_id)->update([
                'cls_major_id'  => $request->mjr_name     
        ]);
        return redirect('class/list-class')->withSuccess('Edit Berhasil');
     }


	 public function DeleteClass($cls_id)
     {
         ClassModel::whereClsId($cls_id)->delete();
         return back()->withToastSuccess('Berhasil dihapus');
     }

  











   }

