@extends('layouts.master-admin')
<!DOCTYPE html>
<html>
<head>

</head>
<body>
  @section('content')
  <div class="card-body">
           <div class="card-title">Form Update Class</div>
           <hr>
            <form action="/classes/UpdateClass/{{ $class->cls_id }}" method="post">
              @csrf
<!-- tingkatan,nama jurusan, ngambil data dari table -->
       <div class="form-group">
                    <label for="input-3">Tingkatan</label>
                    <select type="text" class="form-control single-select" name="cls_grade_level_id">
                      <option value="" disabled="">Pilih</option>
                      @if(!empty($gradeLevels))
                      @foreach($gradeLevels as $data)
                      <option value="{{$data->grd_id}}" {{($data->grd_id == $class->cls_grade_level_id ) ? 'selected' : '' }}>{{ $data->grd_name}}</option>
                      @endforeach
                      @endif
                    </select>
              </div>

                  <div class="form-group">
                    <label for="input-3">Jurusan</label>
                    <select type="text" class="form-control single-select" name="cls_major_id">
                      <option value="" disabled="">Pilih</option>
                      @if(!empty($major))
                      @foreach($major as $data)
                      <option value="{{ $data->mjr_id}}"  {{ ($data->mjr_id == $class->cls_major_id) ? 'selected' : '' }}>{{ $data->mjr_name}}</option>
                      @endforeach
                      @endif
                    </select>
              </div>

       

           <div class="form-group">
            <label for="input-1">Nomor kelas </label>
           <select type="text" class="form-control" name="cls_number" required="">
              <option value="" disabled="">Pilih</option>
              <option value="1" {{ ( $class->cls_number == 1 ) ? 'selected' : '' }}>1</option>
              <option value="2" {{ ( $class->cls_number == 2 ) ? 'selected' : '' }}>2</option>
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
