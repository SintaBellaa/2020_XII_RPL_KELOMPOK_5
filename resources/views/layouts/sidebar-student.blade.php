<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="{{URL::to('/student')}}">
       <img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Admin</h5>
     </a>
	 </div>
	 <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">SMKS MAHAPUTRA CERDAS UTAMA</li>
     
      <li>
        <a href="{{URL::to('')}}" class="waves-effect">
          <i class="icon-calendar"></i> <span>Daftar Pelanggaran</span> 
        </a>
      </li>



      <li>
        <a href="{{URL::to('/student/list-student')}}" class="waves-effect">
          <i class="icon-calendar"></i> <span>info</span> 
        </a>
      </li>


    
   </ul>
         

	 
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->