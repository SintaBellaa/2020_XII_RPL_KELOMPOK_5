<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="{{URL::to('/admin/dashboard')}}">
       <img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">RockerAdmin</h5>
     </a>
	 </div>
	 <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="index.html" class="waves-effect">
          <i class="icon-home"></i> <span>kelola pelanggaran</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{URL::to('/admin/list-offense')}}"><i class="fa fa-circle-o"></i>list pelanggaran</a></li>
          <li><a href="{{URL::to('/admin/list-category')}}"><i class="fa fa-circle-o"></i>list kategori</a></li>
 
  
          
        </ul>
      </li>
     
      <li>
        <a href="index.html" class="waves-effect">
          <i class="zmdi zmdi-collection-item"></i> <span>kelola siswa</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{URL::to('/admin/list-student') }}"><i class="icon-list icons"></i>List Data siswa</a></li>
          <li><a href="{{URL::to('/admin/add-student') }}"><i class="zmdi zmdi-plus-square"></i>Tambah data siswa</a></li>
   
        </ul>


      </li>

       <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a>
      </li>

       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form>
     
	 
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->