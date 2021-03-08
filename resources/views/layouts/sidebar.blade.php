<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="{{URL::to('/admin/dashboard')}}">
       <img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Offense System</h5>
     </a>
	 </div>
	 <ul class="sidebar-menu do-nicescrol">
      
       <li>
        <a href="index.html" class="waves-effect">
          <i class="zmdi zmdi-collection-item"></i> <span>Manage Offense Data Category</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{URL::to('/admin/list-category')}}"><i class="icon-list icons"></i>list category data</a></li>
    
        </ul>
      </li>
     
      <li>
        <a href="index.html" class="waves-effect">
          <i class="zmdi zmdi-accounts-list"></i> <span>Manage Student</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{URL::to('/admin/list-student') }}"><i class="icon-list icons"></i>list student data</a></li>
  
   
        </ul>


      </li>

       <li>
        <a href="index.html" class="waves-effect">
          <i class="icon-home"></i> <span>Manage Offense</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{URL::to('/admin/list-offense')}}"><i class="icon-list icons"></i>list offense data</a></li>
    
        </ul>
      </li>

       <li>
        <a href="index.html" class="waves-effect">
          <i class="icon-home"></i> <span>Manage Major</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{URL::to('/major/list-major')}}"><i class="icon-list icons"></i>list Major Data</a></li>
    
        </ul>
      </li>

       <li>
        <a href="index.html" class="waves-effect">
          <i class="icon-home"></i> <span>Manage Classes</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{URL::to('/classes/list-class')}}"><i class="icon-list icons"></i>list Class Data</a></li>
    
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