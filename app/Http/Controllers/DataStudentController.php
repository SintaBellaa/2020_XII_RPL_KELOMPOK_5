<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Student;
use RealRashid\SweetAlert\Facades\Alert;
use App\Offense;


class DataStudentController extends Controller
{
     //student
     public function IndexStudent()
    {
        $student = Student::all();
        return view('admin-student.list-student',['student'=> $student]);
    }


    public function AddStudent(){
        return view('admin-student.add-student');

    }

   
     public function StoreStudent(Request $request)
     {
            $nis = Student::whereNis($request->input('nis'))->first();

           if ($nis) {
             Alert::error('gagal', 'nis sudah tersedia');
               return back();
           } else {
             DB::table('students')->insert([
                'nis'  => $request->nis,
                'name'  => $request->name,
                'class'  => $request->class,
                'gender' => $request->gender,
                'address' => $request->address
        ]);
              return redirect('admin/list-student')->withSuccess('Data Berhasil disimpan');
           }
        return $request->input('address'); 
        

            
     }


   
      public function EditStudent($id)
    {
        $student = DB::table('students')->where('id',$id)->first();
        return view('admin-student.edit-student',['student' => $student]);
     }

     public function UpdateStudent(Request $request,$id)
     {
        DB::table('students')->where('id',$id)->update([
                'nis'  => $request->nis,
                'name'  => $request->name,
                'class'  => $request->class,
                'gender' => $request->gender,
                'address' => $request->adress
        ]);
        return redirect('admin/list-student')->withSuccess('Edit Berhasil');
     }
    
    public function DeleteStudent($id)
    {
        Student::whereId($id)->delete();
        //Offense::whereNoStudent($id)->delete();
        return back()->withSuccess('Delete Berhasil');
    }
}
