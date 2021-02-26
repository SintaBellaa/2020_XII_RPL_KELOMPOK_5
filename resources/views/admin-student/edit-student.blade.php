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
            <form action="{{URL::to('admin/UpdateStudent/'.$student->id)}}" method="post">
              @csrf
           <div class="form-group">
            <label for="input-1" >Nis</label>
            <input value="{{$student->nis}}" type="text" name="nis" class="form-control" id="input-1" placeholder="Enter nis">
           </div>


           <div class="form-group">
            <label for="input-2">Name</label>
            <input value="{{$student->name}}" type="text" name="name" class="form-control" id="input-3" placeholder="Enter name">
           </div>

            <div class="form-group">
            <label for="input-3">kelas</label>
            <SELECT type="text" class="form-control" name="class" required="">
              <option value="{{$student->class}}"></option>
              <option>X RPL</option>
              <option>X MM</option>
              <option>XI RPL</option>
              <option>XI MM</option>
              <option>XII RPL 1</option>
              <option>XII RPL 2</option>
              <option>XII MM</option>
              
            </SELECT>
           </div>

           <div class="form-group">
            <label for="input-2">Jenis Kelamin</label>
            <input value="{{$student->gender}}" type="text" name="adress" class="form-control" id="input-3" placeholder="Enter gender">
           </div>


            <div class="form-group">
            <label for="input-2">Address</label>
            <input value="{{$student->address}}" type="text" name="adress" class="form-control" id="input-3" placeholder="Enter address">
           </div>


           
           <div class="form-group">
            <button type="submit" class="btn btn-primary shadow-primary px-5"><i></i>submit</button>
          </div>
          </form>
         </div>

  @endsection
</body>
</html>


