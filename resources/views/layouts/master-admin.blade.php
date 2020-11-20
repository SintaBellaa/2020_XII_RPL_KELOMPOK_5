<!DOCTYPE html>
<html>

	@include('layouts.head')
<body>
	@include('layouts.sidebar')

	@include('layouts.header')

	<div class="clearfix"></div>
 	<div class="content-wrapper">

 	 	<div class="row">
 	 		<div class="col-lg-12">
 	 			@yield('content')
 	 		</div>
 	 		</div>
 	</div>


 	<!--start footer-->
 	<footer class="footer">
      <div class="container">
        <div class="text-center">
          SISTEM PELANGGARAN SMK MAHAPUTRA
        </div>
      </div>
    </footer>
    <!--end footer-->

   </div>
  @include('sweetalert::alert')
  @include('layouts.js')
</body>
</html>