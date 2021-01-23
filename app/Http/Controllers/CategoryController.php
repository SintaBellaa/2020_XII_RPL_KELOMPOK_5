<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Category;

class CategoryController extends Controller
{
     //category
    public function index()
     {
        $category = DB::table('offense_category')->get();
        return view ('admin.list-category',['category'=> $category ]);
     }

    public function AddCategory()
     {
        return view('admin.add-category');
     }

    
    public function StoreCategory(Request $request)
     {
            DB::table('offense_category')->insert([
                'offense_name'  => $request->offense_name,
                'offense_type'  => $request->offense_type,
                'point'         => $request->point
        ]);

        return redirect('admin/list-category')->withSuccess('Data Berhasil disimpan');
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
