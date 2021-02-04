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
        return view ('category.list-category',['category'=> $category ]);
     }

    public function AddCategory()
     {
        return view('category.add-category');
     }

    
    public function StoreCategory(Request $request)
     {
            DB::table('offense_category')->insert([
                'offense_name'  => $request->offense_name,
                'point'         => $request->point
        ]);

        return redirect('admin/list-category')->withSuccess('Data Berhasil disimpan');
     }

    
    public function EditCategory($id)

     {
        $category = DB::table('offense_category')->where('id',$id)->first();
        return view('category.edit-category',['category' => $category]);
     }

     public function UpdateCategory(Request $request,$id)
     {
       
        DB::table('offense_category')->where('id' ,$id)->update([
                'offense_name'  => $request->offense_name,
                'point'         => $request->point
        ]);

        return redirect('admin/list-category')->withSuccess('Data Berhasil disimpan');
     }
 
      public function DestroyCategory($id)
    {
        $deleteCategory  = DB::table('offense_category')->where('id', $id)->delete();
        return back()->withToastSuccess('Berhasil dihapus');


    }
          }


