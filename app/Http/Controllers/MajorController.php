<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use RealRashid\SweetAlert\Facades\Alert;
use App\Major;

class MajorController extends Controller
{
     public function IndexMajor()
    {
        $major = Major::all();
        return view('major.list-major',['major'=> $major]);
    }

     public function AddMajor()
    {
        return view('major.add-major');
    }

    public function StoreMajor(Request $request)
    {
    	$major             = new Major;
    	$major->mjr_name   = $request->mjr_name;
    	$major->save();

    	return redirect('major/list-major')->withSuccess('tambah Berhasil');
    	
    }

     public function EditMajor($mjr_id)
    {
        $major = DB::table('majors')->where('mjr_id',$mjr_id)->first();
        return view('major.edit-major',['major' => $major]);
     }

     public function UpdateMajor(Request $request,$mjr_id)
     {
        DB::table('majors')->where('mjr_id',$mjr_id)->update([
                'mjr_name'  => $request->mjr_name     
        ]);
        return redirect('major/list-major')->withSuccess('Edit Berhasil');
     }


}
