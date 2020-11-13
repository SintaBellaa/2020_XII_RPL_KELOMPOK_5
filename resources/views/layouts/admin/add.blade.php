@extends('layouts.master-admin')
<!DOCTYPE html>
<html>
<head>

</head>
<body>
	@section('content')
	<div class="card-body">
				   <div class="card-title">Vertical Form</div>
				   <hr>
				    <form>
					 <div class="form-group">
					  <label for="input-1">Name</label>
					  <input type="text" class="form-control" id="input-1" placeholder="Enter Your Name">
					 </div>
					 <div class="form-group">
					  <label for="input-2">Email</label>
					  <input type="text" class="form-control" id="input-2" placeholder="Enter Your Email Address">
					 </div>
					 <div class="form-group">
					  <label for="input-3">Password</label>
					  <input type="text" class="form-control" id="input-3" placeholder="Enter Password">
					 </div>
					 <div class="form-group">
					   <div class="icheck-primary">
						<input type="checkbox" id="user-checkbox1" checked="">
						<label for="user-checkbox1">Remember me</label>
					  </div>
					 </div>
					 <div class="form-group">
					  <button type="submit" class="btn btn-primary shadow-primary px-5"><i class="icon-lock"></i> Login</button>
					</div>
					</form>
				 </div>

	@endsection
</body>
</html>
