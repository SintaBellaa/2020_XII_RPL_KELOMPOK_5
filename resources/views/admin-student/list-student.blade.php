@extends('layouts.master-admin')
@section('content')
 <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Data siswa</div>
            <div class="container" style="margin-left:20px;">
            <a href="/admin/add-student" class="btn btn-primary">Add Student</a>
        </div>
             <div class="table-responsive">
               
            </div>
            <div class="card-body">
             

              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                    <th>no</th>
                        <th>nis</th>
                        <th>nama</th>
                        <th>kelas</th>
                        <th>jenis kelamin</th>
                        <th>alamat</th>
                        <th class="text-center">action</th>
                        
                    </tr>
                </thead>
                <tbody>
                        @foreach ($student as $s)
                       <tr>
                           <td>{{ $s->id }}</td>
                           <td>{{ $s->nis }}</td>
                           <td>{{ $s->name }}</td>
                           <td>{{ $s->class }}</td>
                           <td>{{ $s->gender }}</td>
                           <td>{{ $s->address }}</td>
                            <td class="text-center">
                                <a href="{{URL::to('/admin/edit-student/'.$s->id)}}">
                                    <i data-toggle="tooltip" data-placement="top" title="Edit" aria-hidden="true" class="fa fa-edit fa-lg"></i>
                                </a> &nbsp

                                
                                <a href="{{URL::to('/admin/student/delete')}}" data-toggle="tooltip" data-placement="top" title="Delete">
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