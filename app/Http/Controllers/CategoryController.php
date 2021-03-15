<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\OffenseCategory;

class CategoryController extends Controller
{
     //category
    public function index()
     {
        $data['offense_category'] = OffenseCategory::all();
        return view ('category.list-category',$data);
     }

    public function AddCategory()
     {
        return view('category.add-category');
     }

    
    public function StoreCategory(Request $request)
     {
           $this->validate($request,[
            'ofc_name'  => 'required|unique:offense_categories,ofc_name',
            'ofc_point'         => 'required|numeric|min:1',
           ]);

           $category = new OffenseCategory;
           $category->ofc_name   = $request->ofc_name;
           $category->ofc_point  = $request->ofc_point;
           $category->save();

        return redirect('admin/list-category')->withSuccess('Data Berhasil disimpan');
     }

    
    public function EditCategory($ofc_id)

     {
        $category = OffenseCategory::where('ofc_id',$ofc_id)->first();
        return view('category.edit-category',['category' => $category]);
     }

     public function UpdateCategory(Request $request,$id)
     {
       
         $this->validate($request,[
            'ofc_name'       => 'required|unique:offense_categories,ofc_name',
            'ofc_point'     => 'required|numeric|min:1',
           ]);

           $category = new OffenseCategory;
           $category->ofc_name = $request->ofc_name;

        return redirect('admin/list-category')->withSuccess('Data Berhasil disimpan');
     }
 
      public function DestroyCategory($ofc_id)
    {
        OffenseCategory::whereOfcId($ofc_id)->delete();
        return back()->withToastSuccess('Berhasil dihapus');


    }
          }


