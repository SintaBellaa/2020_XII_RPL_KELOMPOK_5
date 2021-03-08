<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.dash-student');
    }

    public function list()
    {
        return view('student.list');
    }
    
}

