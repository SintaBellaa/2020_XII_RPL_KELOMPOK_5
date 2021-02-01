<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataStudentController extends Controller
{
     //student
    public function ListStudent()
    {
        return view ('admin-student.list-student');

    }
    public function AddStudent(){
        return view('admin-student.add-student');

    }
    public function SaveAddStudent(){
       return redirect('/admin/list-student')->withSuccess('Data Berhasil disimpan');
    }
      public function EditStudent()
    {
        return back()->withSuccess('Edit Berhasil');
    }
    
    public function DeleteStudent()
    {
        return back()->withSuccess('Delete Berhasil');
    }
}
