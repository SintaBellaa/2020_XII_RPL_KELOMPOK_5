
   <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
       <a href="{{URL::to('/admin/dashboard')}}">
       <img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Offense System</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-graduation icons"></i>
          <span>Manage Major</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
         <li class="{{ request()->is('/major/list-major') ? 'active' : '' }}"><a href="{{URL::to('/major/list-major')}}"><i class="icon-list icons"></i>list Major Data</a></li>
        </ul>
      </li>
    
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-equalizer"></i>
          <span>Manage Classes</span>
        </a>
        <ul class="sidebar-submenu">
          <li class="{{ request()->is('/classes/list-class') || request()->is('/classes/AddClass') ? 'active' : '' }}"><a href="{{URL::to('/classes/list-class')}}"><i class="icon-list icons"></i>list Class Data</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-collection-item"></i>
          <span>Manage Offense Data Category</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
            <li class="{{ request()->is('/admin/list-category') ? 'active' : '' }}"><a href="{{URL::to('/admin/list-category')}}"><i class="icon-list icons"></i>list category data</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-accounts-list"></i> <span>Manage Student</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
         <li class="{{ request()->is('/admin/list-student') ? 'active' : '' }}"><a href="{{URL::to('/admin/list-student') }}"><i class="icon-list icons"></i>list student data</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-notebook icons"></i> <span>Manage Offense</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li class="{{ request()->is('/admin/list-offense') ? 'active' : '' }}"><a href="{{URL::to('/admin/list-offense')}}"><i class="icon-list icons"></i>list offense data</a></li>
        </ul>
      </li>
      
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-notebook icons"></i> <span>Penalty</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li class="{{ request()->is('/admin/penalty') ? 'active' : '' }}"><a href="{{URL::to('/admin/penalty')}}"><i class="icon-list icons"></i>List Penalty</a></li>
        </ul>
      </li>
      
      
   
    </ul>
   
   </div>
   <!--End sidebar-wrapper-->