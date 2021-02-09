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
				    <form action="/admin/StoreStudent" method="post">
				    	@csrf
					 <div class="form-group">
					  <label for="input-1">nis</label>
					  <input type="text" name="nis" required="" class="form-control" id="input-1" placeholder="Enter Your Name">
					 </div>

					 <div class="form-group">
					  <label for="input-2">nama</label>
					  <input type="text" name="name" required="" class="form-control" id="input-2" placeholder="Enter Your Email Address">
					 </div>

					 <div class="form-group">
					  <label for="input-3">kelas</label>
					  <SELECT type="text" class="form-control" name="class" required="" value="">
					  	<option value=""></option>
					  	<option>X RPL</option>
					  	<option>X MM</option>
					  	<option>XI RPL</option>
					  	<option>XI MM</option>
					  	<option>XII RPL 1</option>
					  	<option>XII RPL 2</option>
					  	<option>XII MM</option>
					  	
					  </SELECT>
					 </div>

					 <div class="form-group">
					  <label for="input-3">jenis kelamin</label><br>
					 <SELECT type="text" class="form-control" name="gender" required="" value="">
					 	<option value=""></option>
					  	<option>Laki-Laki</option>
					  	<option>Perempuan</option>
					  </SELECT>
					 </div>

					  <div class="form-group">
					  <label for="input-3">alamat</label>
					  <textarea type="text" cols="3" rows="5" name="address" required="" class="form-control" id="input-3" placeholder="Enter Adress"></textarea>
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
