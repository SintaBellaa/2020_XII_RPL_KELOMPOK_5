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
				    <form method="post">
				    	@csrf
					 <div class="form-group">
					  <label for="input-1">no_student</label>
					  <input type="text" name="offense_name" class="form-control" id="input-1" placeholder="Enter Your Name">
					 </div>

					 <div class="form-group">
					  <label for="input-2">no_category</label>
					  <input type="text" name="offense_type"class="form-control" id="input-2" placeholder="Enter Your Email Address">
					 </div>

					 <div class="form-group">
					  <label for="input-3">total_point</label>
					  <input type="text" name="point" class="form-control" id="input-3" placeholder="Enter Password">
					 </div>

					 
					 <div class="form-group">
					  <button type="submit" class="btn btn-primary shadow-primary px-5"><i></i>submit</button>
					</div>
					</form>
				 </div>

	@endsection
</body>
</html>
