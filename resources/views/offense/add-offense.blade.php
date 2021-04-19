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
				    <form action="/admin/store-offense"  method="post">
              @csrf


					   <div class="form-group">
                    <label for="input-3">Name</label>
                    <select type="text" class="form-control single-select" name="nama_siswa_id"  required="">
                      <option value="" selected disabled="">Pilih siswa</option>
                      @if(!empty($student))
                      @foreach($student as $data)
                      <option value="{{ $data->stu_id }}">{{ $data->usr_name}}</option>
                      @endforeach
                      @endif
                    </select>
              </div>



                 <div class="form-group">
                    <label for="input-3">Pelanggaran</label>
                    <select type="text" class="form-control single-select" name="offense_category_id"  required="">
                      <option value="" selected disabled="">Pilih Pelanggaran</option>
                      @if(!empty($offense_category))
                      @foreach($offense_category as $data)
                      <option value="{{ $data->ofc_id }}">{{ $data->ofc_name }} - point {{$data->ofc_point}}</option>
                      @endforeach
                      @endif
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
