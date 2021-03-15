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
                    <label for="input-3">Tingkatan</label>
                    <select type="text" class="form-control single-select" name="">
                      <option value="" selected disabled="">Pilih</option>
                      @if(!empty($class))
                      @foreach($class as $data)
                      <option value="{{ $data->grd_id}}">{{ $data->grd_name}}</option>
                      @endforeach
                      @endif
                    </select>
              </div>

                  <div class="form-group">
                    <label for="input-3">Jurusan</label>
                    <select type="text" class="form-control single-select" name="">
                      <option value="" selected disabled="">Pilih</option>
                      @if(!empty($class))
                      @foreach($class as $data)
                      <option value="{{ $data->mjr_id}}">{{ $data->mjr_name}}</option>
                      @endforeach
                      @endif
                    </select>
              </div>

       

           <div class="form-group">
            <label for="input-1">Nomor kelas </label>
           <select type="text" class="form-control" name="cls_number" required="">
              <option value="" selected disabled="">Pilih</option>
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
