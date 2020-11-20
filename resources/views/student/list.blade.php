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
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                       
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>San Francisco</td>
                        <td>66</td>
                        <td>2009/01/12</td>
                        
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>22</td>
                        <td>2012/03/29</td>
                        
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>33</td>
                        <td>2008/11/28</td>
                        
                    </tr>
                </tbody>
               
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
@endsection