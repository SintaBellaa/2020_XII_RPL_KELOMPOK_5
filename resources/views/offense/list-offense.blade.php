@extends('layouts.master-admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header"><i class="fa fa-table"></i>List offense data</div>
        <div class="container" style="margin-left:20px;">
            <a href="/admin/add-offense" class="btn btn-primary">+ ADD Offense Data</a>
        </div>
        
        <div class="card-body">
          <div class="table-responsive">
 
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>nama siswa</th>
                        <th>nama pelanggaran</th>
                        <th>poin</th>
                        <th>Tanggal Pelanggaran</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($offense as $key=> $data)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$data->usr_name}}</td>
                        <td>{{$data->ofc_name}}</td>
                        <td>{{$data->ofc_point}}</td>
                        <td>{{$data->ofs_date}}</td>
                             <td class="text-center">
                                <a href="{{URL::to('/admin/edit-offense/'.$data->ofs_id)}}">
                                    <i data-toggle="tooltip" data-placement="top" title="Edit" aria-hidden="true" class="fa fa-edit fa-lg"></i>
                                </a>

                                 <a href="{{URL::to('/admin/delete/'.$data->ofs_id)}}">
                                    <i data-toggle="tooltip" data-placement="top" title="delete" aria-hidden="true" class="fa fa-trash fa-lg"></i>
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



</div>
</div>
</div>
</div>
@endsection