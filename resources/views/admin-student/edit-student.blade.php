P@extends('layouts.master-admin')
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
            <label for="input-2">Class</label>
            <input value="{{$student->class}}" type="text" name="class" class="form-control" id="input-3" placeholder="Enter class">
           </div>

             <div class="form-group">
            <label for="input-2">Gender</label>
            <input value="{{$student->gender}}" type="text" name="gender" class="form-control" id="input-3" placeholder="Enter gender">
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


