@extends('layouts.master-admin')
<!DOCTYPE html>
<html>
<head>

</head>
<body>
  @section('content')
  <div class="card-body">
           <div class="card-title">Form Edit Offense</div>
           <hr>
           @foreach($offense as $data)
            <form action="{{URL::to('admin/UpdateOffense/'. $data->id)}}" method="post">
              @csrf
              
                 <div class="form-group">
                    <label for="input-1" >Nama Siswa</label>
                    <input value="{{$data->name}}" type="text" name="no_student" class="form-control" id="input-1" placeholder="Enter name">
                 </div>
                 
                 <div class="form-group">
                    <label for="input-1" >Pelanggaran</label>
                    <input value="{{$data->offense_name}}" type="text" name="no_category" class="form-control" id="input-1" placeholder="Enter offense">
                 </div>

                 
             @endforeach
             <div class="form-group">
              <button type="submit" class="btn btn-primary shadow-primary px-5"><i></i>submit</button>
            </div>
          </form>
         </div>

  @endsection
</body>
</html>


