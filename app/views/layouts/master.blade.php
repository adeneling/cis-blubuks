<!DOCTYPE html>
<html lang="en">
  <head>
    <title> @yield('title') | Customer Intimacy System</title>

    <!-- Bootstrap core CSS -->
    {{HTML::style('css/bootstrap.css') }}
    <!--external css-->
    {{HTML::style('font-awesome/css/font-awesome.css') }}
        
    <!-- Custom styles for this template -->
    {{HTML::style('css/style.css') }}
    
    {{HTML::style('css/style-responsive.css') }}
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- Header -->
      @include('layouts.header')
      <!-- Header End -->

      <!-- SideBar -->
      @include('layouts.sidebar')
      <!-- SiderBar End -->
     
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">          	
            <!-- Awal Breadcrumb -->
            <ol class="breadcrumb">
              @yield('breadcrumb')
            </ol>
            <!-- Awal Breadcrumb -->

            <div class="row mt">
          	 <div class="col-lg-12">
              
              @include('layouts.partials.alert')
          		
              <p>Untuk Konten</p>

              @yield('content')

          		</div>
          	</div>
			
		    </section>
      <!--/wrapper -->
      </section>
        <!-- /MAIN CONTENT -->


        <!--main content end-->
        <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015 - Blubuks Company
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    {{HTML::script('js/jquery.js')}}    
    {{HTML::script('js/bootstrap.min.js')}}    
    {{HTML::script('js/jquery-ui-1.9.2.custom.min.js')}}    
    {{HTML::script('js/jquery.ui.touch-punch.min.js')}}    
    {{HTML::script('js/jquery.dcjqaccordion.2.7.js')}}    
    {{HTML::script('js/jquery.scrollTo.min.js')}}
    {{HTMl::script('js/jquery.nicescroll.js')}}
    


    <!--common script for all pages-->
    {{HTML::script('js/common-scripts.js')}}

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
