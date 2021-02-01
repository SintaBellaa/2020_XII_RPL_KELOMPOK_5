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
                      <label>Nama  / Nim</label>
                      <select class="form-control single-select" name="nama_siswa">
                          <option value="IIs">IIs (1234)</option>
                          <option value="Sinta">Sinta (4567)</option>
                          <option>Malay(189890)</option>
                          <option>Desma (675)</option>
                          <option>Windi(34534)</option>
                          <option>Ahmad (345)</option>
                          <option>Rendi (345)</option>
                          <option>Bagus (897)</option>
                          <option>Raisa (0890)</option>
                          <option>Wakwaw (345)</option>
                          <option>Ojan (102092828320910)</option>
                          
                      </select>
                    </div>

                     <div class="form-group">
                      <label>Pelanggaran</label>
                      <select class="form-control single-select">
                          <option>Mencuri Sendal Mesjid (2)</option>
                          <option>Muka Tidak Standar (3)</option>
                          <option>Celana Panjang Sebelah (1)</option>
                          <option>MEnggunakan Senjata Tajam (1)</option>
                          <option>Pacaran Dengan Mantan Teman (7)</option>
                          <option>Nikung Gebetan Teman (12)</option>
                          <option>Pak Wifi Buat Donlot Pilem (20)</option>
                      </select>
                    </div>

                    

					 
					 
					 <div class="form-group">
					  <button type="submit" class="btn btn-primary shadow-primary px-5"><i></i>submit</button>
					  <a href="/list-offense"></a>
					</div>
					</form>
				 </div>

	@endsection
</body>
</html>
