@extends('layouts.master-admin')
<!DOCTYPE html>
<html>
<head>

</head>
<body>
	@section('content')
	<div class="card-body">
				   <div class="card-title">Form Add major</div>
				   <hr>
				    <form action="/major/StoreMajor" method="post">
				    	@csrf
					 <div class="form-group">
					  <label for="input-1">nama Jurusan </label>
					  <input type="text" name="mjr_name" required="" class="form-control" id="input-1" placeholder="Enter Your Name">
					 </div>

					  <div class="form-group">
					  <button type="submit" class="btn btn-primary shadow-primary px-5"><i></i>submit</button>
					  <a href="/list-major">
					</div>
					</form>
				</div>

	@endsection
</body>
</html>
