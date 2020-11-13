@extends('layouts.master-admin')

<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	@section('content')
		<h1>WELCOME :) </h1>
		<div class="col-lg-12">
          <div class="card">
            <div class="card-header text-uppercase">SMKS MAHAPUTRA CERDAS UTAMA</div>
             <div class="card-body">
               <div id="carousel-1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/gallery/logo.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/gallery/rpl.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/gallery/mm.jpg" alt="Third slide">
                  </div>
                </div>
              </div>
             </div>
          </div>
        </div>

		@endsection
</body>
</html>