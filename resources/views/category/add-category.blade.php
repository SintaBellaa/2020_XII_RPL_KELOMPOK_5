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
					  <label for="input-1">offense name</label>
					  <input type="text" name="offense_name" class="form-control" id="input-1" placeholder="Enter offense_name">
					 </div>

					 <div class="form-group">
					  <label for="input-3">point</label>
					  <input type="text" name="point" class="form-control" id="input-3" placeholder="Enter point">
					 </div>

					 
					 <div class="form-group">
					  <button type="submit" class="btn btn-primary shadow-primary px-5"><i></i>submit</button>
					</div>
					</form>
				 </div>

	@endsection
</body>
</html>


