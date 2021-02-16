@extends('layouts.master-admin')
<!DOCTYPE html>
<html>
<head>

</head>
<body>
  @section('content')
  <div class="card-body">
           <div class="card-title">Form Edit Category</div>
           <hr>
            <form action="{{URL::to('admin/UpdateCategory/'.$category->id)}}" method="post">
              @csrf
           <div class="form-group">
            <label> offense name <span style="color: red"> *</span></label>
            <input type="text" name="offense_name" class="form-control form-control-rounded @error('offense_name') is-invalid @enderror" placeholder="Masukkan Nama Pelanggaran" value="{{ old('offense_name') }}">
            @error('offense_name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
           </div>

          <div class="form-group">
            <label> Point <span style="color: red"> *</span></label>
            <input type="text" name="point" class="form-control form-control-rounded @error('point') is-invalid @enderror" placeholder="Masukkan Point" value="{{ old('point') }}" required>
            @error('point')
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


