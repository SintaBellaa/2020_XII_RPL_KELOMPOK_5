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
                    <tr>
                        <td>18191025</td>
                        <td>Desmarita Fitriani</td>
                        <td>Xii Rpl 1</td>
                        <td>Perempuan</td>
                        <td>cembul</td>
                       
                    </tr>
                    <tr>
                        <td>18191083</td>
                        <td>Sinta Bela</td>
                        <td>xii Rpl 1</td>
                        <td>Perempuan</td>
                        <td>Bojong Waru</td>
                        
                    </tr>
                    <tr>
                        <td>181910</td>
                        <td>Windi Yulyani</td>
                        <td>xii Rpl 1</td>
                        <td>Perempuan</td>
                        <td>Landean</td>
                        
                    </tr>
                    <tr>
                        <td>181910</td>
                        <td>Malay Cahya Aprita</td>
                        <td>xii Rpl 1</td>
                        <td>perempuan</td>
                        <td>Sompok</td>
                        
                    </tr>
                </tbody>
               
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
@endsection