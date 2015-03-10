<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Login | Customer Intimacy System</title>
    

    <!-- Bootstrap core CSS -->
    {{HTML::style('css/bootstrap.css')}}
    
    <!--external css-->
    {{HTML::style('font-awesome/css/font-awesome.css')}}
    
         
    <!-- Custom styles for this template -->
    {{HTML::style('css/style.css')}}
    
    {{HTML::style('css/style-responsive.css')}}
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  		

	  			{{Form::open(array('url'=>'/authenticate','class'=>'form-login')) }}		      	
		        	<h2 class="form-login-heading"><a href="{{URL::to('/')}}">BLUBUKS COMPANY</a> <br>sign in now</h2>

				        <div class="login-wrap">
				        <!-- Alert Awal-->
				        	@include('layouts.partials.alert')  		
				        	<hr>
				        <!-- Alert Akhir-->
							{{ Form::label('email', 'E-Mail Address') }}
				        	{{Form::text('email',null, array('class'=>'form-control','placeholder'=>'Masukan Email anda'))}}
				            <br>
				            {{ Form::label('password', 'Password') }}
				            {{Form::password('password',array('class'=>'form-control','placeholder'=>'Masukan Password'))}}						
							
							<label class="checkbox">
			                <span class="pull-right">
			                    <a class="" href="#"> Lupa Password?</a>		
			                </span>
				            </label>
				            
				            {{Form::button('<i class="fa fa-lock"></i> SIGN IN', array('type' => 'submit', 'class' => 'btn btn-theme btn-block'))}}

				            <!-- {{ Form::submit('SIGN IN', array('class'=>'btn btn-theme btn-block')) }} -->
				            <hr>
				            <!-- Tombol Social Media				            
				            <div class="login-social-link centered">
				            <p>atau kamu juga dapat masuk lewat media sosial</p>
				                <button class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</button>
				                <button class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</button>
				            </div>
				            -->
				            <div class="registration">
				                Belum Punya Akun?<br/>
				                <a class="" href="{{URL::to('/signup')}}">
				                    Buat akun baru sekarang
				                </a>
				            </div>
			        </div>
		      	{{Form::close()}}
	  		
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    {{HTML::script('js/jquery.js')}}
    {{HTML::script('js/bootstrap.min.js')}}
    
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    {{HTML::script('js/jquery.backstretch.min.js')}}
    
    <script>
        $.backstretch("img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
