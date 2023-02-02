
<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Logobar -->
        <div class="logobar">
            <a href="{{url('/')}}" class="logo logo-large">Logo</a>
        </div>
        <!-- End Logobar -->
        
        <div class="profilebar text-center">
            <img src="assets/images/users/profile.svg" class="img-fluid" alt="profile">
            <div class="profilename">
              <h5 class="text-white">Shourya Kumar111</h5>
              <p>Social Media Strategist</p>
            </div>
            <div class="userbox">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="#" class="profile-icon"><img src="assets/images/svg-icon/user.svg" class="img-fluid" alt="user"></a></li>
                    <li class="list-inline-item"><a href="#" class="profile-icon"><img src="assets/images/svg-icon/email.svg" class="img-fluid" alt="email"></a></li>
                    <li class="list-inline-item"><a href="#" class="profile-icon"><img src="assets/images/svg-icon/logout.svg" class="img-fluid" alt="logout"></a></li>
                </ul>
              </div>
        </div>
         
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <ul class="vertical-menu">
                <li class="vertical-header"></li>
                <li>
                    <a href="javaScript:void();">
                      <img src="assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard"><span>Dashboard</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/')}}"><i class="mdi mdi-circle"></i>Pages</a></li>
                        <!--<li><a href="{{url('/dashboard-ecommerce')}}"><i class="mdi mdi-circle"></i>eCommerce</a></li>
                        <li><a href="{{url('/dashboard-analytics')}}"><i class="mdi mdi-circle"></i>Analytics</a></li>-->
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/layouts.svg" class="img-fluid" alt="layouts"><span>Product </span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <!--<li><a href="{{url('/../light-vertical')}}"><i class="mdi mdi-circle"></i>Light - Vertical</a></li> 
                        <li><a href="{{url('/../light-horizontal')}}"><i class="mdi mdi-circle"></i>Light - Horizontal</a></li>-->
                        <li><a href="{{route('product.import')}}"><i class="mdi mdi-circle"></i>Product Import</a></li> 
                        <!--<li><a href="{{url('/../dark-horizontal')}}"><i class="mdi mdi-circle"></i>Dark - Horizontal</a></li>-->
                    </ul>
                </li>
                
                 
        </div>
         <!--End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>