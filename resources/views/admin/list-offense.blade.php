@extends('layouts.master-admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header"><i class="fa fa-table"></i>List Pelanggaran</div>
        <div class="container" style="margin-left:20px;">
            <a href="/admin/add-offense" class="btn btn-primary">Tambah</a>
        </div>
        
        <div class="card-body">
          <div class="table-responsive">
            

            
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>nis</th>
                        <th>no kategori</th>
                        <th class="text-center">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td class="text-center">
                            <a href="" data-toggle="modal" data-target="#defaultsizemodal">
                                <i data-toggle="tooltip" data-placement="top" title="Edit" aria-hidden="true" class="fa fa-edit fa-lg"></i>
                            </a> &nbsp

                            
                        </td>
                        
                    </tr>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>6</th>
                        <th>Position</th>
                        <th>Office</th>
                        <td></td>
                        
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
</div>
</div><!-- End Row-->


<div class="modal fade" id="defaultsizemodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-star"></i> Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
     <div class="card-body">
        <div class="card-title">Form Add Category</div>
        <hr>
        <form method="post">
            @csrf
            <div class="form-group">
                <label for="input-1">no_student</label>
                <input type="text" name="offense_name" class="form-control" id="input-1" placeholder="Enter Your Name">
            </div>

            <div class="form-group">
                <label for="input-2">no_category</label>
                <input type="text" name="offense_type"class="form-control" id="input-2" placeholder="Enter Your Email Address">
            </div>

            <div class="form-group">
                <label for="input-3">total_point</label>
                <input type="text" name="point" class="form-control" id="input-3" placeholder="Enter Password">
            </div>

            

    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
    <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save changes</button>
</form>
</div>
</div>
</div>
</div>
@endsection