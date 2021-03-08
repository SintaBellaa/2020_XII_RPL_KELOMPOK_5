@extends('layouts.master-admin')

	@section('content')
	<div class="card-body">
	   <div class="card-title">Form Add Student</div>
	   <hr>
	    <form action="/admin/StoreStudent" method="post">
	    	@csrf
		 <div class="form-group">
		  <label for="input-1">nis</label>
		  <input type="text" name="stu_nis" maxlength="11" required="" class="form-control" id="input-1" placeholder="Enter Your Name">
		 </div>

		 <div class="form-group">
		  <label for="input-2">nama</label>
		  <input type="text" name="usr_name" required="" class="form-control" id="input-2" placeholder="Enter Your Email name user">
		 </div>

		 <div class="form-group">
		  <label for="input-3">kelas</label>
		  <select type="text" class="form-control single-select" name="cls_id" id="cls_id" required="">
		  	<option value="" selected disabled="">Pilih Salah Satu</option>
		  	@if(!empty($class))
		  	@foreach($class as $data)
		  	<option value="{{ $data->id_class }}">{{ $data->grd_name }} - {{ $data->mjr_name }} - {{$data->cls_number}}</option>
		  	@endforeach
		  	@endif
		  </select>
		 </div>

		 <div class="form-group">
		  <label for="input-3">jenis kelamin</label><br>
		 <select type="text" class="form-control" name="stu_gender" required="" value="">
		 	<option value="" selected disabled="">Pilih Salah Satu</option>
		  	<option value="Laki-Laki">Laki-Laki</option>
		  	<option value="Perempuan">Perempuan</option>
		  </select>
		 </div>

		  <div class="form-group">
		  <label for="input-3">alamat</label>
		  <input type="text" cols="3" rows="5" name="stu_address" required="" class="form-control" id="input-3" placeholder="Enter Adress"></input>
		 </div>
		
		<div class="form-group">
		  <label for="input-3">Email</label>
		  <input type="text" cols="3" rows="5" name="usr_email" required="" class="form-control" id="input-3" placeholder="Enter email"></input>
		 </div>

		 <div class="form-group">
		  <label for="input-3">Password</label>
		  <input type="password" cols="3" rows="5" name="usr_password" required="" class="form-control" id="input-3" placeholder="Enter your Password"></input>
		 </div>

		 <div class="form-group">
		  <label for="input-3">No.Handphone</label>
		  <input type="text" cols="3" rows="5" name="usr_phone" required="" maxlength="14" class="form-control" id="input-3" placeholder="Enter Phone number"></input>
		 </div>

		 <div class="form-group">
		  <button type="submit" class="btn btn-primary shadow-primary px-5"><i></i>submit</button>
		  <a href="/list-student">
		</div>
		</form>
	 </div>

	@endsection

