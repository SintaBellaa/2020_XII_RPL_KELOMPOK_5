<!DOCTYPE html>
<html>

	@include('layouts.head')

  @yield('css')
<body>
  <!-- Start wrapper-->
 <div id="wrapper">
 
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

    <!--end footer-->

   </div>

  @include('sweetalert::alert')
  @include('layouts.js')
  
   @yield('js')
</body>
</html>