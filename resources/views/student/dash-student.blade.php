@extends('layouts.master-student')

<!DOCTYPE html>
<html>
<head>
  
</head>
<body>
  @section('content')
    <h1></h1>
    <div class="col-lg-12">
          <div class="card">
            <div class="card-header text-uppercase"></div>
             <div class="card-body">
               <div id="carousel-1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('assets/images/gallery/mp/mp rpl mm.jpeg')}}" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('assets/images/gallery/mp/rpl1.jpeg')}}" alt="Second slide">
                  </div>
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('assets/images/gallery/mp/mm1.jpeg')}}" alt="Third slide">
                  </div>
                </div>
              </div>
             </div>
          </div>
        </div>

    @endsection
</body>
</html>