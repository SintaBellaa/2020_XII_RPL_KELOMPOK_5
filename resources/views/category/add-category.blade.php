@extends('layouts.master-admin')
<!DOCTYPE html>
<html>
<head>

</head>
<body>
	@section('content')
	<div class="card-body">
				   <div class="card-title">Form Add Category</div>
				   <hr>
				    <form action="/admin/StoreCategory" method="post">
				    	@csrf
					 <div class="form-group">
					  <label> offense name <span style="color: red"> *</span></label>
					  <input type="text" name="ofc_name" class="form-control form-control-rounded @error('ofc_name') is-invalid @enderror" placeholder="Masukkan Nama Pelanggaran" value="" required>
					  @error('ofc_name')
					  <span class="invalid-feedback" role="alert">
					  	<strong>{{ $message }}</strong>
					  </span>
					  @enderror
					 </div>

					 <div class="form-group">
					  <label> point <span style="color: red"> </span></label>
					  <input type="text" name="ofc_point" class="form-control form-control-rounded @error('ofc_point') is-invalid @enderror" placeholder="Masukkan Point" value="" required>
					  @error('ofc_spoint')
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


