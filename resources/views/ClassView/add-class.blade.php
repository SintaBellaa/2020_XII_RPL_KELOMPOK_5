@extends('layouts.master-admin')
<!DOCTYPE html>
<html>
<head>

</head>
<body>
  @section('content')
  <div class="card-body">
           <div class="card-title">Form Add Class</div>
           <hr>
            <form action="/classes/StoreClass" method="post">
              @csrf
<!-- tingkatan,nama jurusan, ngambil data dari table -->
           <div class="form-group">
            <label for="input-1">Tingkatan</label>
             <select type="text" class="form-control" name="grd_name" required="">
              <option value="" selected disabled="">Pilih Salah Satu</option>
              <option value="0">X</option>
              <option value="1">XI</option>
              <option value="2">XII</option>
            </select>
           </div>

            <div class="form-group">
            <label for="input-1">Jurusan</label>
            <select type="text" class="form-control" name="grd_name" required="">
              <option value="" selected disabled="">Pilih Salah Satu</option>
              <option value="0">Rekayasa Perangkat Lunak</option>
              <option value="1">Multimedia</option>
            </select>
           </div>

           <div class="form-group">
            <label for="input-1">Nomor kelas </label>
           <select type="text" class="form-control" name="cls_number" required="">
              <option value="" selected disabled="">Pilih Salah Satu</option>
              <option value="0">1</option>
              <option value="1">2</option>
            </select>
          </div>

            <div class="form-group">
            <button type="submit" class="btn btn-primary shadow-primary px-5"><i></i>submit</button>
            <a href="/list-class">
          </div>
          </form>
        </div>

  @endsection
</body>
</html>
