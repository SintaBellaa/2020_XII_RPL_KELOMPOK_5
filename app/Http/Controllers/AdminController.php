<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('layouts.admin.dashboard');
    }

    public function list()
    {
        return view('layouts.admin.list-pelanggaran');
    }
    public function add(){
    	return view('layouts.admin.add');
    }
}

