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

                <div class="form-group">
                    <label for="input-3">Tingkat</label>
                    <select type="text" class="form-control single-select" name="cls_grade_level_id">
                      <option value="" selected disabled="">Pilih</option>
                      @if(!empty($gradeLevels))
                      @foreach($gradeLevels as $data)
                      <option value="{{ $data->grd_id}}">{{ $data->grd_name}}</option>
                      @endforeach
                      @endif
                    </select>
              </div>
                  <div class="form-group">
                    <label for="input-3">Jurusan</label>
                    <select type="text" class="form-control single-select" name="cls_major_id">
                      <option value="" selected disabled="">Pilih</option>
                      @if(!empty($major))
                      @foreach($major as $data)
                      <option value="{{ $data->mjr_id}}">{{ $data->mjr_name}}</option>
                      @endforeach
                      @endif
                    </select>
              </div>
              
               <div class="form-group">
                <label for="input-1">Nomor kelas </label>
               <select type="text" class="form-control" name="cls_number" required="">
                  <option value="" selected disabled="">Pilih</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
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
