@extends('layouts.master-admin')
<!DOCTYPE html>
<html>
<head>

</head>
<body>
  @section('content')
  <div class="card-body">
           <div class="card-title">Form Edit Category</div>
           <hr>
            <form action="{{URL::to('admin/UpdateCategory/'.$category->id)}}" method="post">
              @csrf
           <div class="form-group">
            <label for="input-1" >offense name</label>
            <input value="{{$category->offense_name}}" type="text" name="offense_name" class="form-control" id="input-1" placeholder="Enter offense_name">
           </div>


           <div class="form-group">
            <label for="input-2">point</label>
            <input value="{{$category->point}}" type="text" name="point" class="form-control" id="input-2" placeholder="Enter point">
           </div>

           
           <div class="form-group">
            <button type="submit" class="btn btn-primary shadow-primary px-5"><i></i>submit</button>
          </div>
          </form>
         </div>

  @endsection
</body>
</html>


