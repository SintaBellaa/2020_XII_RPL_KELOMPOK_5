<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Admin</h5>
     </a>
	 </div>
	 <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">SMKS MAHAPUTRA CERDAS UTAMA</li>
      <li>
        <a href="index.html" class="waves-effect">
          <i class="zmdi zmdi-collection-item"></i> <span>kelola pelanggaran</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{ url('/admin/list-pelanggaran') }}"><i class="icon-list icons"></i>List Data Pelanggaran</a></li>
          <li><a href="{{ url('/add') }}"><i class="zmdi zmdi-plus-square"></i>Tambah data Pelanggaran</a></li>
   
        </ul>
      </li>
      <li>
        <a href="{{ url('/admin-list') }}" class="waves-effect">
          <i class="icon-calendar"></i> <span>list</span> 
        </a>
      </li>
      <li>
        <a href="{{(url('/admin-add'))}}" class="waves-effect">
          <i class="icon-calendar"></i> <span>Tambah</span> 
        </a>
      </li>
    
      <li>
        <a href="index.html" class="waves-effect">
          <i class="zmdi zmdi-menu"></i> <span>Kelola Data Siswa</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="index.html"><i class="icon-list icons"></i>Kelola Data siswa</a></li>
          <li><a href="index2.html"><i class="zmdi zmdi-account-add"></i>tambah Data Siswa</a></li>
         
          
        </ul>
      </li>

      <li>
        <a href="{{ url('/logout')}}" class="waves-effect"><i class="icon-logout icons"></i> <span>Logout</span></a>
      </li>
      
   </ul>
         

	 
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->