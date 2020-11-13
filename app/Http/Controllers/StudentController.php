<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('layouts.student.dash-student');
    }

    public function list()
    {
        return view('layouts.student.list-student');
    }
    
}

