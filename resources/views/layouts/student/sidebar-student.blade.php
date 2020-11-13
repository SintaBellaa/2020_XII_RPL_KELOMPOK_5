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
        <a href="{{(url('/student/list-student'))}}" class="waves-effect">
          <i class="icon-calendar"></i> <span>list</span> 
        </a>
      </li>
    
      

      <li>
        <a href="{{ url('/logout')}}" class="waves-effect"><i class="icon-logout icons"></i> <span>Logout</span></a>
      </li>
      
   </ul>
         

	 
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->