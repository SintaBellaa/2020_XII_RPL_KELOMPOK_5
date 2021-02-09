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
        $data['category'] = Category::all();
        return view ('category.list-category',$data);
     }

    public function AddCategory()
     {
        return view('category.add-category');
     }

    
    public function StoreCategory(Request $request)
     {
           $this->validate($request,[
            'offense_name'  => 'required',
            'point'         => 'required|numeric|min:1',
           ]);

           $category = new Category;
           $category->offense_name   = $request->offense_name;
           $category->point          = $request->point;
           $category->save();

        return redirect('admin/list-category')->withSuccess('Data Berhasil disimpan');
     }

    
    public function EditCategory($id)

     {
        $category = DB::table('offense_category')->where('id',$id)->first();
        return view('category.edit-category',['category' => $category]);


     }

     public function UpdateCategory(Request $request,$id)
     {
       
         $this->validate($request,[
            'offense_name'       => 'required',
            'point'              => 'required|numeric|min:1',
           ]);

           $category = new Category;
           $category->offense_name = $request->offense_name;

        return redirect('admin/list-category')->withSuccess('Data Berhasil disimpan');
     }
 
      public function DestroyCategory($id)
    {
      Category::whereId($id)->delete();
        return back()->withToastSuccess('Berhasil dihapus');


    }
          }


