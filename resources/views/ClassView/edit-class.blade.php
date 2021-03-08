@extends('layouts.master-admin')
<!DOCTYPE html>
<html>
<head>

</head>
<body>
  @section('content')
  <div class="card-body">
           <div class="card-title">Form Edit Class</div>
           <hr>
            <form action="{{URL::to('/ClassView/UpdateClass/'.$Class->cls_id)}}" method="post">
              @csrf
           <div class="form-group">
            <label> nama kelas<span style="color: red"> *</span></label>
            <input type="text" name="cls_name" class="form-control form-control-rounded @error('cls_name') is-invalid @enderror" placeholder="Masukkan Nama jurusan" value="{{$class->cls_name}}">
            @error('cls_name')
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


