@extends('layouts.master-admin')
@section('content')
 <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Data Kelas</div>
            <div class="container" style="margin-left:20px;">
            <a href="/classes/AddClass" class="btn btn-primary">Add Class</a>
        </div>
             <div class="table-responsive">
               
            </div>
            <div class="card-body">
             

              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                    <th>no</th>
                        <th>Tingkatan</th>
                        <th>Jurusan</th>
                        <th>Nomor Kelas</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($class as $cls_id => $cl)
                       <tr>
                           <td>{{ $cls_id+1 }}</td>
                           <td>{{ $cl->grd_name }}</td>
                            <td>{{ $cl->mjr_name}}</td>
                             <td>{{ $cl->cls_number}}</td>
                            <td>
                                <a href="{{URL::to('/classes/EditClass/{cls_id}'.$cl->cls_id)}}">
                                    <i data-toggle="tooltip" data-placement="top" title="Edit" aria-hidden="true" class="fa fa-edit fa-lg"></i>
                                </a>
                            </td> 
                      </tr>
                    @endforeach
                </tbody>
               
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->

@endsection