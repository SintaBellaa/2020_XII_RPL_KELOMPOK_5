@extends('layouts.master-admin')
@section('content')
 <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Data Jurusan</div>
            <div class="container" style="margin-left:20px;">
            <a href="/major/AddMajor" class="btn btn-primary">Add Major</a>
        </div>
             <div class="table-responsive">
               
            </div>
            <div class="card-body">
             

              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                    <th>no</th>
                        <th>nama Jurusan</th>
                        <th class="text-center">action</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($major as $mjr_id => $m)
                       <tr>
                           <td>{{ $mjr_id+1 }}</td>
                           <td>{{ $m->mjr_name }}</td>
                            <td class="text-center">
                                <a href="{{URL::to('/major/EditMajor/'.$m->mjr_id)}}">
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