<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\OffenseCategory;
use DataTables;
class CategoryController extends Controller
{
 
 
    public function index(Request $request)
     {

      $base = $this->base64();
        if ($request->ajax()) {
              $data = OffenseCategory::latest()->get();
              return Datatables::of($data)
                      ->addColumn('action', function($data) use ($base){
                              return '<a href="'.url('/admin/edit-category', $base->encrypt($data->ofc_id)).'" class="btn btn-primary waves-effect waves-light m-1"><i data-toggle="tooltip" data-placement="top" title="Edit" aria-hidden="true" class="fa fa-edit fa-lg"></i></a>' . '&nbsp' . '<a href="'.url('/admin/destroy-category', $base->encrypt($data->ofc_id)).'" class="btn btn-danger waves-effect waves-light m-1"> <i aria-hidden="true" class="fa fa-trash fa-lg"></i></a>';
                      })
                      ->editColumn('ofc_point', function($data){
                          if ( $data->ofc_point >= 40 && $data->ofc_point < 60) {
                              return '<span _ngcontent-aos-c153="" class="badge badge-warning m-1">'.$data->ofc_point.' SP 1</span>';
                          } else if ( $data->ofc_point >= 60 && $data->ofc_point < 100 ) {
                             return '<span _ngcontent-aos-c153="" class="badge badge-warning m-1">'.$data->ofc_point.' SP 2</span>';
                          }  else if( $data->ofc_point == 100 ) {
                            return '<span _ngcontent-aos-c153="" class="badge badge-danger m-1">'.$data->ofc_point.' SP 3</span>';
                          } else if( $data->ofc_point >= 1 && $data->ofc_point < 40) {
                              return '<span _ngcontent-aos-c153="" class="badge badge-success m-1">'.$data->ofc_point.' Pelanggaran Ringan</span>';
                          }
                      })
                      
                      ->addIndexColumn()
                      ->rawColumns(['action','ofc_point'])
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
       $base = $this->base64();

        $category = OffenseCategory::where('ofc_id', $base->decrypt($ofc_id))->first();

        if ($category) {       
          return view('category.edit-category',['category' => $category]);
        } else {
          abort(403);
        }
     }

     public function UpdateCategory(Request $request,$id)
     {
       $base = $this->base64();
       
         $this->validate($request,[
            'ofc_name'       => 'required|unique:offense_categories,ofc_name,'.$id.',ofc_id,deleted_at,NULL',
            'ofc_point'     => 'required|numeric|min:1',
           ]);

           $category = OffenseCategory::where('ofc_id', $base->decrypt($ofc_id))->first();
           $category->ofc_name = $request->ofc_name;
           $category->ofc_point  = $request->ofc_point;
           $category->save();

        return redirect('admin/list-category')->withSuccess('Data Berhasil disimpan');
     }
 
      public function DestroyCategory($ofc_id)
    {
      
       $base = $this->base64();
        OffenseCategory::whereOfcId($base->decrypt($ofc_id))->delete();
        return redirect('admin/list-category')->withToastSuccess('Berhasil dihapus');


    }
 }


