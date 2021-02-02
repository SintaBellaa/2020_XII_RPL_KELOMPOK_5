<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\student;

class DataStudentController extends Controller
{
     //student
     public function IndexStudent()
    {
        $student = DB::table('students')->get();
        return view('admin-student.list-student',['student'=> $student]);
    }


    public function AddStudent(){
        return view('admin-student.add-student');

    }

     public function StoreStudent(Request $request)
     {
            DB::table('students')->insert([
                'nis'  => $request->nis,
                'name'  => $request->name,
                'class'  => $request->class,
                'gender' => $request->gender,
                'address' => $request->address
        ]);

             return redirect('admin/list-student')->withSuccess('Data Berhasil disimpan');
     }


   
      public function EditStudent($id)
    {
        $student = DB::table('students')->where('id',$id)->first();
        return view('student.edit-student',['student' => $student]);
     }

     public function UpdateStudent(Request $request,$id)
     {

        DB::table('students')->update([
                'nis'  => $request->nis,
                'name'  => $request->name,
                'class'  => $request->class,
                'gender' => $request->gender,
                'address' => $request->address
        ]);
        return redirect('admin/list-student')->withSuccess('Edit Berhasil');
     }
    
    public function DeleteStudent()
    {
        return back()->withSuccess('Delete Berhasil');
    }
}
