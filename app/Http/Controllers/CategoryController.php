<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\OffenseCategory;

class CategoryController extends Controller
{
 
  //SEMANGAT SIS 
    public function index(Request $request)
     {
        if ($request->ajax()) {
              $data = OffenseCategory::latest()->get();
              return Datatable::of($data)
                      ->addColumn('action', function($data){
                              return '<a href="'.url('/admin/edit-category/', $data->ofc_id).'" class="btn btn-primary waves-effect waves-light m-1"><i data-toggle="tooltip" data-placement="top" title="Edit" aria-hidden="true" class="fa fa-edit fa-lg"></i></a>' . '&nbsp' . '<a href="'.url('/admin/destroy-category/', $data->ofc_id).'" class="btn btn-danger waves-effect waves-light m-1"> <i aria-hidden="true" class="fa fa-trash fa-lg"></i></a>';
                      })
                      ->editColumn('point', function($data){
                          if ( $data->point == 40 ) {
                              return '<span _ngcontent-aos-c153="" class="badge badge-warning m-1">SP 1</span>';
                          } else if ( $data->point == 60 ) {
                             return '<span _ngcontent-aos-c153="" class="badge badge-warning m-1">SP 2</span>';
                          }  else if( $data->point == 100 ) {
                            return '<span _ngcontent-aos-c153="" class="badge badge-danger m-1">SP 3</span>';
                          }
                      })
                      
                      ->addIndexColumn()
                      ->rawColumns(['action','point'])
                      ->make(true);
         }
         return view('category.list-category');
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


