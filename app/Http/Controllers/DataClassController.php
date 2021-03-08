<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\ClassModel;

class DataClassController extends Controller
{
   public function index()
    {
     	$data['class'] = ClassModel::join('majors','cls_major_id','=','majors.mjr_id')
     	->join('grade_levels','cls_grade_level_id','=','grade_levels.grd_id')
     	->select('class.*','majors.mjr_name','grade_levels.grd_name') 
     	->get();

     	return view('ClassView.list-class', $data);
    }

    public function AddClass()
    {
   	return view('ClassView.add-class');
	}

	
  











   }

