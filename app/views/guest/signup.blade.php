<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Daftar | Customer Intimacy System</title>
    

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

	  <div id="signup-page" >
	  	<div class="container" >
	  		
				{{Form::open(array('url' => route('guest.register'), 'class' => 'form-signup')) }}
	  					      	
		        	<h2 class="form-signup-heading" ><a href="{{URL::to('/')}}">BLUBUKS COMPANY</a> <br>DAFTAR SEKARANG</h2>

				        <div class="signup-wrap">
				        <!-- Alert Awal-->
				        	@include('layouts.partials.validation')
				        	<hr>			        	
				        <!-- Alert Akhir-->
							{{Form::label('first_name', 'Nama Depan') }}
				        	{{Form::text('first_name',null, array('class'=>'form-control','placeholder'=>'Nama Depan' , 'autofocus'))}}
				            <br>
				            {{Form::label('last_name', 'Nama Belakang') }}
				        	{{Form::text('last_name',null, array('class'=>'form-control','placeholder'=>'Nama Belakang'))}}
				        	<br>
				        	{{Form::label('email', 'Masukan E-Mail') }}
				        	{{Form::text('email',null, array('class'=>'form-control','placeholder'=>'Masukan E-Mail'))}}
				        	<br>
				            {{ Form::label('password', 'Password') }}
				            {{Form::password('password',array('class'=>'form-control','placeholder'=>'************'))}}
				            <br>
				            {{Form::label('password_confirmation', 'Konfirmasi Password') }}
				            {{Form::password('password_confirmation',array('class'=>'form-control','placeholder'=>'************'))}}
				            <br>
				            {{Form::label('id_card_number', 'ID KTP') }}
				            {{Form::text('id_card_number',null,array('class'=>'form-control','placeholder'=>'Masukan ID KTP'))}}
				            <br>
				            {{Form::label('address', 'Alamat') }}
				            {{Form::text('address',null,array('class'=>'form-control','placeholder'=>'Alamat Lengkap'))}}
				            <br>

				            {{Form::button('DAFTAR', array('type' => 'submit', 'class' => 'btn btn-theme btn-block'))}}
				            <hr>
				            <div class="registration">
				                Sudah Punya Akun?<br>
				                <a class="" href="{{URL::to('/login')}}">
				                    Masuk
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
        $.backstretch("img/signup-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
