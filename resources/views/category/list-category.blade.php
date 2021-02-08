@extends('layouts.master-admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header"><i class="fa fa-table"></i>List category data</div>
        <div class="container" style="margin-left:20px;">
            <a href="/admin/add-category" class="btn btn-primary">ADD category</a>

        </div>
`
        <div class="card-body">
          <div class="table-responsive">

              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>nama pelanggaran</th>
                        <th>poin</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                       @foreach ($category as $id => $c)
                       <tr>
                           <td>{{ $id+1 }}</td>
                           <td>{{ $c->offense_name }}</td>
                           <td>{{ $c->point }}</td>


                              <td class="text-center">
                                <a href="{{URL::to('/admin/edit-category/'.$c->id)}}">
                                    <i data-toggle="tooltip" data-placement="top" title="Edit" aria-hidden="true" class="fa fa-edit fa-lg"></i>
                                </a> &nbsp

                                <a href="{{URL::to('/admin/destroy-category/'.$c->id)}}" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i aria-hidden="true" class="fa fa-trash fa-lg"></i>
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
