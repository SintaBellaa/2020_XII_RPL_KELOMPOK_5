@extends('layouts.master-admin')
<!DOCTYPE html>
<html>
<head>

</head>
<body>
  @section('content')
  <div class="card-body">
           <div class="card-title">Form Edit Offense</div>
           <hr>
            <form action="{{URL::to('admin/UpdateOffense/'.$offense->ofs_id)}}" method="post">
              @csrf

                 <div class="form-group">
                    <label for="input-3">Name</label>
                    <select type="text" class="form-control single-select" name="userId"  required="">
                      <option  disabled="">Pilih siswa</option>
                      @if(!empty($student))
                        @foreach($student as $data)
                        <option value="{{ $data->stu_id}}" {{ ($data->stu_id == $offense->stu_id) ? 'selected' : '' }}>{{ $data->usr_name}}</option>
                        @endforeach
                      @endif
                    </select>
              </div>

                 <div class="form-group">
                    <label for="input-1" >Pelanggaran</label>
                     <select type="text" class="form-control single-select" name="catId"  required="">
                         <option  disabled="">Pilih Pelanggaran</option>
                         @if(!empty($offense_cat))
                             @foreach($offense_cat as $item)
                                 <option value="{{$item->ofc_id}}" {{ ($data->ofc_id == $offense->id_ofc) ? 'selected' : '' }}>{{$item->ofc_name . '  (Point ' .  $item->ofc_point . ' )'}}</option>
                             @endforeach
                         @endif
                     </select>
                 </div>

               <div class="form-group">
                <button type="submit" class="btn btn-primary shadow-primary px-5"><i></i>submit</button>
              </div>
          </form>
         </div>

  @endsection
</body>
</html>


