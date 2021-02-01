<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OffenseController extends Controller
{
     //offense
     public function ListOffense()
    {
        return view('offense.list-offense');
    }
    public function AddOffense(){
        return view('offense.add-offense');
         
    }
    public function SaveAddOffense(Request $request)
    {
        return redirect('/admin/list-offense')->withSuccess($request->input('nama_siswa').' Berhasil Ditambahkan');
    }
      public function EditListOffense()
    {
        return back()->withSuccess('Edit Berhasil');
    }
}
