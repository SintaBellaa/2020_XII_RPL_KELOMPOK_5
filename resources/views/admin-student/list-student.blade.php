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

            <div class="card-body">


              <table id="example" class="table table-bordered" style="width: 100%">
                <thead>
                    <tr>
                    <th>no</th>
                        <th>Nis</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jenis kelamin</th>
                        <th>Alamat</th>
                        <th class="text-center">Action</th>

                    </tr>
                </thead>

                <tbody>
                        @foreach ($student as $stu_id => $s)
                       <tr>
                           <td>{{ $stu_id+1 }}</td>
                           <td>{{ $s->stu_nis }}</td>
                           <td>{{ $s->usr_name }}</td>
                           <td>{{ $s->grd_name }} - {{ $s->mjr_name }} - {{$s->cls_number}}</td>
                           <td>{{ $s->stu_gender }}</td>
                           <td>{{ $s->stu_address }}</td>
                            <td class="text-center">
                                <a href="{{URL::to('/admin/edit-student/'.$s->stu_id)}}">
                                    <i data-toggle="tooltip" data-placement="top" title="Edit" aria-hidden="true" class="fa fa-edit fa-lg"></i>
                                </a> &nbsp


                                <a href="{{URL::to('/admin/student/delete',$s->stu_id)}}" data-toggle="tooltip" data-placement="top" title="Delete">
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
        </div>
      </div><!-- End Row-->

@endsection
