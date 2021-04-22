<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Offense;
use App\User;
use App\OffenseCategory;
use RealRashid\SweetAlert\Facades\Alert;
use DataTables;
use Carbon\Carbon;
class PenaltyController extends Controller
{

	private function student()
	{
		$student = User::role('student')->join('students', 'users.usr_id', 'students.stu_user_id')
            ->select('users.*',
                'students.*')->get();

            return $student;
	}

	private function offense_category()
	{
		 $category = OffenseCategory::latest()->get();
		 return $category;
	}


    function index(Request $request)
    {
    	$base = $this->base64();
        if ($request->ajax()) {
              $data = Offense::join('students as std_ofs', 'offenses.ofs_student_id', '=', 'std_ofs.stu_id')
              			->join('offense_categories as ofs', 'offenses.ofs_offense_category_id', '=', 'ofs.ofc_id')
              			->join('users as user', 'std_ofs.stu_id', '=', 'user.usr_id')
              			->select(
              				'std_ofs.*',
              				'ofs.*',
              				'offenses.*',
              				'offenses.ofs_id as dt_ofs',
              				'user.*'
              			)->get();

              return Datatables::of($data)
                      ->addColumn('action', function($data) use ($base) {
                      		if ($data->total_point == 100) {
                              return '<a href="'.url('/admin/edit-penalty', $base->encrypt($data->dt_ofs)).'" class="btn btn-primary waves-effect waves-light m-1"><i data-toggle="tooltip" data-placement="top" title="Edit" aria-hidden="true" class="fa fa-edit fa-lg"></i></a>' . '&nbsp' . '<a href="'.url('/admin/destroy-penalty', $base->encrypt($data->dt_ofs)).'" class="btn btn-danger waves-effect waves-light m-1"> <i aria-hidden="true" class="fa fa-trash fa-lg"></i></a>' . '&nbsp' . '<a href="'.url('/admin/generateSurat', $base->encrypt($data->dt_ofs)).'" class="btn btn-warning waves-effect waves-light m-1"><i data-toggle="tooltip" data-placement="top" title="Edit" aria-hidden="true" class="fa fa-download fa-lg"></i></a>';
                      		} else {
                              return '<a href="'.url('/admin/edit-penalty', $base->encrypt($data->dt_ofs)).'" class="btn btn-primary waves-effect waves-light m-1"><i data-toggle="tooltip" data-placement="top" title="Edit" aria-hidden="true" class="fa fa-edit fa-lg"></i></a>' . '&nbsp' . '<a href="'.url('/admin/destroy-penalty', $base->encrypt($data->dt_ofs)).'" class="btn btn-danger waves-effect waves-light m-1"> <i aria-hidden="true" class="fa fa-trash fa-lg"></i></a>';
                      		}

                      })
                      ->editColumn('total_point', function($data) use ($base) {
                          if ( $data->total_point >= 1 && $data->total_point <= 10) {
                              return '<span _ngcontent-aos-c153="" class="badge badge-warning m-1">'.$data->total_point.'  Peringatan Guru Bk</span>';
                          } else if ( $data->total_point > 10 && $data->total_point <= 20 ) {
                             return '<span _ngcontent-aos-c153="" class="badge badge-warning m-1">'.$data->total_point.' Peringatan Pertama Wali Kelas / Guru Bk</span>';
                          }  else if( $data->total_point > 20 && $data->total_point <= 30 ) {
                            return '<span _ngcontent-aos-c153="" class="badge badge-danger m-1">'.$data->total_point.' Peringatan Kedua Wali Kelas / Guru Bk</span>';
                          } else if( $data->total_point > 30 && $data->total_point <= 50 ) {
                            return '<span _ngcontent-aos-c153="" class="badge badge-danger m-1">'.$data->total_point.' Panggilan Pertama Orang Tua</span>';
                          } else if( $data->total_point > 50 && $data->total_point < 100 ) {
                            return '<span _ngcontent-aos-c153="" class="badge badge-danger m-1">'.$data->total_point.' Panggilan Kedua Orang Tua</span>';
                          } else if( $data->total_point == 100 ) {
                        	
                        	return '<span _ngcontent-aos-c153="" class="badge badge-danger m-1">'.$data->total_point.' Panggilan Kedua Orang Tua</span>';    
                          } 
                      })

		              ->editColumn('ofs_date', function($data){
		                    return Carbon::parse($data->ofs_date)->translatedFormat('l, d F Y');
		              })
                      
                      ->addIndexColumn()
                      ->rawColumns(['action','total_point'])
                      ->make(true);
         }
         return view('penalty.list-penalty');
    }

    function create()
    {
    	$data['student'] = $this->student();
    	$data['categori'] = $this->offense_category();

    	return view('penalty.create', $data);
    }

    function store(Request $request)
    {

    	$offense_kategori = OffenseCategory::whereOfcId($request->ofs_offense_category_id)->first();

    	$offense = Offense::whereOfsStudentId($request->ofs_student_id)
    	->where('ofs_offense_category_id', $request->ofs_offense_category_id)
    	->count();
	
    	if ($offense < 1) {
    		$offense_new = new Offense;
    		$offense_new->ofs_student_id = $request->ofs_student_id;
    		$offense_new->ofs_offense_category_id = $request->ofs_offense_category_id;
    		$offense_new->total_point  = $offense_kategori->ofc_point;
    		$offense_new = now('Y-m-d H:i:s');
    		$offense_new->save();
    	} else {
    	
			$offense_old = Offense::whereOfsStudentId($request->ofs_student_id)->first();


			$total_point = $offense_kategori->ofc_point += $offense_old->total_point; 

    		$offense_new = new Offense;
    		$offense_new->ofs_student_id = $request->ofs_student_id;
    		$offense_new->ofs_offense_category_id = $request->ofs_offense_category_id;
    		$offense_new->total_point  = $total_point;
    		$offense_new = now('Y-m-d H:i:s');
    		$offense_new->save();
    	}

    	if ($offense_new) {
    	 return redirect('admin/penallty')->withSuccess('Tambah Penalty Berhasil');
    	} else {
    		return redirect('admin/penallty')->withWarning('Tambah Penalty Gagal');
    	}
    }

    function edit($id)
    {
	    $data['offense'] = Offense::join('students as std_ofs', 'offenses.ofs_student_id', '=', 'std_ofs.stu_id')
			->join('offense_categories as ofs', 'offenses.ofs_offense_category_id', '=', 'ofs.ofc_id')
			->join('users as user', 'std_ofs.stu_id', '=', 'user.usr_id')
			->select(
				'std_ofs.*',
				'ofs.*',
				'offenses.*',
				'offenses.ofs_id as dt_ofs',
				'user.*'
			)->where('offenses.ofs_id', $id)->first();    	
		return view('penalty.edit', $data);    		
    }
    
    function update(Request $request, $id)
    {

    	$base = $this->base64();
		$offense_kategori = OffenseCategory::whereOfcId($request->ofs_offense_category_id)->first();

		$offense_old  	  = Offense::whereOfsStudentId($request->ofs_student_id)->first();

    	$offense 		  = Offense::whereOfsId($base->encrypt($id))->first();

		$total_point = $offense_kategori->ofc_point += $offense_old->total_point; 
    	
    	$offense->ofs_student_id = $request->ofs_student_id;
    	$offense->ofs_offense_category_id = $request->ofs_offense_category_id;
    	$offense->total_point  = $total_point;
    	$offense->save();
    	
    	if ($offense) {
    	 return redirect('admin/penallty')->withSuccess('Ubah Penalty Berhasil');
    	} else {
    		return redirect('admin/penallty')->withWarning('Ubah Penalty Gagal');
    	}	
    	
    }

    function generateSurat($id)
    {
	   $data['offense'] = Offense::join('students as std_ofs', 'offenses.ofs_student_id', '=', 'std_ofs.stu_id')
		->join('offense_categories as ofs', 'offenses.ofs_offense_category_id', '=', 'ofs.ofc_id')
		->join('users as user', 'std_ofs.stu_id', '=', 'user.usr_id')
		->select(
			'std_ofs.*',
			'ofs.*',
			'offenses.*',
			'offenses.ofs_id as dt_ofs',
			'user.*'
		)->where('offenses.ofs_id', $id)->first();    	
    	
		$data['id'] = $id;

		return view('penalty.suratPeringatan', $data);

    }
}
