<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use RealRashid\SweetAlert\Facades\Alert;
use App\Student;
use App\Offense;
use App\User;
use App\ClassModel;


class DataStudentController extends Controller
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

    public function IndexStudent()
    {
    
        $data['student'] = User::join('students', 'users.usr_id', '=', 'students.stu_user_id')
        ->join('class', 'students.stu_class_id', '=', 'class.cls_id')
        ->join('majors', 'class.cls_major_id', '=', 'majors.mjr_id')
        ->join('grade_levels', 'class.cls_grade_level_id', '=', 'grade_levels.grd_id')
        ->select(
            'users.*',
            'students.*',
            'class.*',
            'students.stu_id',
            'majors.*',
            'grade_levels.*'
        )->get();
       

        
        return view('admin-student.list-student', $data);
    }


    public function AddStudent()
    {
        $data['class'] = $this->class();

        return view('admin-student.add-student', $data);
    }

   
     public function StoreStudent(Request $request)
     {


        $user                        = new User;
        $user->usr_name              = $request->usr_name;
        $user->usr_email             = $request->usr_email;
        $user->usr_phone             = $request->usr_phone;
        $user->usr_password          = $request->usr_password;
        $user->usr_is_active         = 1;
        $user->usr_email_verified_at = now();     
        $user->usr_created_by        = Auth()->user()->usr_id;
        $user->save();

        if ($user) {
            $student                = new Student;
            $student->stu_nis       = $request->stu_nis;
            $student->stu_user_id   = $user->usr_id;
            $student->stu_class_id  = $request->cls_id;
            $student->stu_gender    = $request->stu_gender;
            $student->stu_address   = $request->stu_address;
            $student->save();

            return redirect('/admin/list-student')->withSuccess('Tambah Data Berhasil');
         } else { 
            return redirect('/admin/list-student')->withWarning('Tambah Data Gagal, Silahkan Coba Lagi !');
        }   
     }

      public function EditStudent($stu_id)
    {
        $data['class'] = $this->class();
        $data['student']=Student::join('users', 'users.usr_id', '=', 'students.stu_user_id')
                          ->where('stu_id', $stu_id)->first();
        return view('admin-student.edit-student', $data);

     }

     public function UpdateStudent(Request $request, $stu_id)
     {
        $update = DB::table('students')->where('stu_id', $stu_id)->update([
                'stu_nis'  => $request->stu_nis,
                'stu_user_id' =>$request->usr_id,
                'stu_class_id'  => $request->cls_id,
                'stu_gender' => $request->stu_gender,
                'stu_address' => $request->stu_address
        ]);
        if ($update) {
            return redirect('admin/list-student')->withSuccess('Edit Berhasil');
        } else {
             return redirect('/admin/list-student')->withWarning('Ubah Data Gagal, Silahkan Coba Lagi !');
        }
        
     }
    
    public function DeleteStudent($stu_id)
    {
        Student::whereStuId($stu_id)->delete();
       //Offense::whereNoStudent($id)->delete();
        return back()->withSuccess('Delete Berhasil');
    }
}
