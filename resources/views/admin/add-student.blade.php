@extends('layouts.master-admin')
<!DOCTYPE html>
<html>
<head>

</head>
<body>
	@section('content')
	<div class="card-body">
				   <div class="card-title">Form Add Student</div>
				   <hr>
				    <form method="post">
				    	@csrf
					 <div class="form-group">
					  <label for="input-1">nis</label>
					  <input type="text" name="nis" class="form-control" id="input-1" placeholder="Enter Your Name">
					 </div>

					 <div class="form-group">
					  <label for="input-2">nama</label>
					  <input type="text" name="name"class="form-control" id="input-2" placeholder="Enter Your Email Address">
					 </div>

					 <div class="form-group">
					  <label for="input-3">kelas</label>
					  <input type="text" name="class" class="form-control" id="input-3" placeholder="Enter Password">
					 </div>

					  <div class="form-group">
					  <label for="input-3">jenis kelamin</label>
					  <input type="text" name="gender" class="form-control" id="input-3" placeholder="Enter Gender">
					 </div>

					  <div class="form-group">
					  <label for="input-3">alamat</label>
					  <input type="text" name="address" class="form-control" id="input-3" placeholder="Enter Adress">
					 </div>
					
					 <div class="form-group">
					  <button type="submit" class="btn btn-primary shadow-primary px-5"><i></i>submit</button>
					  <a href="/list-student">
					</div>
					</form>
				 </div>

	@endsection
</body>
</html>
