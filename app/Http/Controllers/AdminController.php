<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index()
    {
        return view('admin.dashboard');
    }
    
    //student
    public function ListStudent()
    {
        return view ('admin.list-student');

    }
    public function AddStudent(){
        return view('admin.add-student');

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

    //offense
     public function ListOffense()
    {
        return view('admin.list-offense');
    }
    public function AddOffense(){
        return view('admin.add-offense');
         
    }
    public function SaveAddOffense(Request $request)
    {
        return redirect('/admin/list-offense')->withSuccess($request->input('nama_siswa').' Berhasil Ditambahkan');
    }
      public function EditListOffense()
    {
        return back()->withSuccess('Edit Berhasil');
    }

    //category
     public function ListCategory()
    {
        return view ('admin.list-category');
    }
    public function AddCategory(){
        return view('admin.add-category');
    }
    public function SaveAddCategory(){
        return redirect('/admin/list-category')->withSuccess('Data Berhasil disimpan');
    }
    
     public function EditListCategory()
    {
        return back()->withSuccess('Edit Berhasil');
    }
    public function DeleteCategory()
    {
        return back()->withToastSuccess('Delete Berhasil');
    }


}

