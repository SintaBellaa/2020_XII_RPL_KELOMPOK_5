@extends('layouts.master-admin')
<!DOCTYPE html>
<html>
<head>

</head>
<body>
  @section('content')
  <div class="card-body">
           <div class="card-title">Form Edit Major</div>
           <hr>
            <form action="{{URL::to('/major/UpdateMajor/'.$major->mjr_id)}}" method="post">
              @csrf
           <div class="form-group">
            <label> nama Jurusan<span style="color: red"> *</span></label>
            <input type="text" name="mjr_name" class="form-control form-control-rounded @error('mjr_name') is-invalid @enderror" placeholder="Masukkan Nama jurusan" value="{{$major->mjr_name}}">
            @error('mjr_name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
           </div>

           <div class="form-group">
            <button type="submit" class="btn btn-primary shadow-primary px-5"><i></i>submit</button>
          </div>
          </form>
         </div>

  @endsection
</body>
</html>


