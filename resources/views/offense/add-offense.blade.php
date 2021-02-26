@extends('layouts.master-admin')
<!DOCTYPE html>
<html>
<head>

</head>
<body>
	@section('content')
	<div class="card-body">
				   <div class="card-title">Form Add Offense</div>
				   <hr>
				    <form method="post">
              @csrf
					 <div class="form-group">
                      <label>Nama  / Nis</label>
                      <select class="form-control single-select" name="nama_siswa_id" required="">
                          <option value="">Pilih Siswa</option>
                          @foreach($student as $data)

                          <option value="{{$data->id}}">{{$data->name}}</option>

                          @endforeach
                          
                      </select>
                    </div>

                     <div class="form-group">
                      <label>Pelanggaran</label>
                      <select class="form-control single-select" name="offense_category_id" required="">
                           <option value="">Pilih Pelanggaran</option>
                          @foreach($offense_category as $data)

                          <option value="{{$data->id}}">{{$data->offense_name}} - point {{$data->point}}</option>

                          @endforeach
                      </select>
                    </div>

                    

					 
					 
					 <div class="form-group">
					  <button type="submit" class="btn btn-primary shadow-primary px-5"><i></i>simpan</button>
					  <a href="/list-offense"></a>
					</div>
					</form>
				 </div>

	@endsection
</body>
</html>
