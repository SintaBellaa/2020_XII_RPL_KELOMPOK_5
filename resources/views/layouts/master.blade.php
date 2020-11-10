<!DOCTYPE html>
<html>
<head>
	@include('layouts.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			@include('layouts.header')
		</header>
		@include('layouts.sidebar')

		<div class="clearfix"></div>
 	 <div class="content-wrapper">
 	 	<section class="content">	 	
    <div class="container-fluid">
    </div>
</div>
</div>

@yield('content')
</section>
</div>
</div>



	@include('layouts.script')
	@yield('script')
</body>
</html>