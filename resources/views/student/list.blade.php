@extends('layouts.master-student')
@section('content')
 <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Data siswa</div>
             <div class="table-responsive">
                 <div class="container" style="margin-left:20px;">
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
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>181910041</td>
                        <td>iis widia</td>
                        <td>xii Rpl 1</td>
                        <td>perempuan</td>
                        <td>Ciborerang</td>
                        
                    </tr>
               
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
@endsection