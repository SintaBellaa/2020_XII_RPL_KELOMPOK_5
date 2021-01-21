@extends('layouts.master-admin')
@section('content')
 <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Data siswa</div>
            <div class="container" style="margin-left:20px;">
            <a href="/admin/add-student" class="btn btn-primary">add</a>
        </div>
             <div class="table-responsive">
               
            </div>
            <div class="card-body">
             

              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>nis</th>
                        <th>nama</th>
                        <th>kelas</th>
                        <th>jenis kelamin</th>
                        <th>alamat</th>
                        <th class="text-center">action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1819.10.025</td>
                        <td>Desma</td>
                        <td>XII RPL 1</td>
                        <td>perempuan</td>
                        <td>kp.cembul</td>
                        <td class="text-center">
                            <a href="" data-toggle="modal" data-target="#defaultsizemodal">
                                <i data-toggle="tooltip" data-placement="top" title="Edit" aria-hidden="true" class="fa fa-edit fa-lg"></i>
                            </a> &nbsp

                            
                            <a href="{{URL::to('/admin/student/delete')}}" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i aria-hidden="true" class="fa fa-trash fa-lg"></i>
                            </a>
                            
                        </td>
                        
                    </tr>
                </tbody>
               
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
        <div class="card-title">Form Edit Student</div>
        <hr>
        <form method="post">
            @csrf
            <div class="form-group">
                <label for="input-1">nis</label>
                <input type="text" name="nis" class="form-control" id="input-1" placeholder="Enter  nis">
            </div>

            <div class="form-group">
                <label for="input-2">name</label>
                <input type="text" name="name"class="form-control" id="input-2" placeholder="Enter name">
            </div>

            <div class="form-group">
                <label for="input-3">class</label>
                <input type="text" name="class" class="form-control" id="input-3" placeholder="Enter class">
            </div>

            <div class="form-group">
                <label for="input-3">gender</label>
                <input type="text" name="gender" class="form-control" id="input-3" placeholder="Enter gender">
            </div>

            <div class="form-group">
                <label for="input-3">address</label>
                <input type="text" name="point" class="form-control" id="input-3" placeholder="Enter address">
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