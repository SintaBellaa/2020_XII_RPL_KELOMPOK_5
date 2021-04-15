<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use RealRashid\SweetAlert\Facades\Alert;
use App\Major;
use DataTables;
class MajorController extends Controller
{

     private function major()
    {
      $major = Major::latest()->get();
  
      return $major;
    }


     public function IndexMajor(Request $request)
    {
       
         if ($request->ajax()) {
            
            $data = Major::latest()->get();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
                           return '<a href="'.url('major/EditMajor', $data->mjr_id).'" class="btn btn-primary waves-effect waves-light m-1"><i data-toggle="tooltip" data-placement="top" title="Edit" aria-hidden="true" class="fa fa-edit fa-lg"></i></a>' . '&nbsp' . '<a href="'.url('/major/delete', $data->mjr_id).'" class="btn btn-danger waves-effect waves-light m-1"> <i aria-hidden="true" class="fa fa-trash fa-lg"></i></a>';
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        // https://www.itsolutionstuff.com/post/laravel-58-datatables-tutorialexample.html
        return view('major.list-major');
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

     public function DeleteMajor($mjr_id)
     {
        Major::whereMjrId($mjr_id)->delete();
        return back()->withToastSuccess('Berhasil dihapus');
     }

}
