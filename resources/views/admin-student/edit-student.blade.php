@extends('layouts.master-admin')
<!DOCTYPE html>
<html>
<head>

</head>
<body>
  @section('content')
  <div class="card-body">
           <div class="card-title">Form Edit Student</div>
           <hr>
            <form action="{{URL::to('admin/UpdateStudent/'.$student->stu_id)}}" method="post">
              @csrf
           <div class="form-group">
            <label for="input-1" >Nis</label>
            <input value="{{$student->stu_nis}}" required="" type="text" name="stu_nis" class="form-control" id="input-1" placeholder="Enter nis">
           </div>

           <div class="form-group">
                <label>Nama</label>
                <input type="text" required="" name="usr_name" value="{{$student->usr_name}}" class="form-control" id="input-1" placeholder="">
            </div>


           <div class="form-group">
          <label for="input-3">kelas</label>
          <select type="text" class="form-control" name="cls_id" id="cls_id" required="">
            <option value="{{$student->stu_class_id}}" disabled="">Pilih Salah Satu</option>
            @if(!empty($class))
            @foreach($class as $data)
            <option value="{{ $data->id_class }}" {{ ($data->id_class == $student->stu_class_id) ? 'selected' : '' }} >{{ $data->grd_name }} - {{ $data->mjr_name }} - {{$data->cls_number}}</option>
            @endforeach
            @endif
          </select>
         </div>

           <div class="form-group">
            <label for="input-3">jenis kelamin</label><br>
           <select type="text" class="form-control" name="stu_gender" required="" value="{{$student->stu_gender}}">
            <option value="" selected disabled="">Pilih Salah Satu</option>
              <option value="Laki-Laki" {{ ($student->stu_gender == 'Laki-Laki') ? 'selected' : '' }}>Laki-Laki</option>
              <option value="Perempuan" {{ ($student->stu_gender == 'Perempuan') ? 'selected' : '' }}>Perempuan</option>
            </select>
           </div>


            <div class="form-group">
            <label for="input-2">Address</label>
            <input value="{{$student->stu_address}}" type="text" name="stu_address" class="form-control" id="input-3" placeholder="Enter address">
           </div>

           
           
           <div class="form-group">
            <button type="submit" class="btn btn-primary shadow-primary px-5"><i></i>submit</button>
          </div>
          </form>
         </div>

  @endsection
</body>
</html>


