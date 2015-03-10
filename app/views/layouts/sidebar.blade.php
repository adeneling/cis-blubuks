<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
        
    	  <p class="centered"><a href="#"><img src="img/ui-sam.jpg" class="img-circle" width="60"></a></p>
    	  <h5 class="centered"> {{ Sentry::getUser()->first_name . ' ' . Sentry::getUser()->last_name }}</h5>
    	  @yield('total_point')

            @yield('nav')
            
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->