<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Blubuks | Customer Intimacy System</title>   

<meta name="description" content="Website Resmi PT. Blubuks Company" /> 

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
{{HTML::style('_guest/css/bootstrap.min.css')}}

<!-- Main Style -->
{{HTML::style('_guest/css/main.css')}}

<!-- Supersized -->
{{HTML::style('_guest/css/supersized.css')}}
{{HTML::style('_guest/css/supersized.shutter.css')}}

<!-- FancyBox -->
{{HTML::style('_guest/css/fancybox/jquery.fancybox.css')}}

<!-- Font Icons -->
{{HTML::style('_guest/css/fonts.css')}}

<!-- Shortcodes -->
{{HTMl::style('_guest/css/shortcodes.css')}}

<!-- Responsive -->
{{HTML::style('_guest/css/bootstrap-responsive.min.css')}}
{{HTML::style('_guest/css/responsive.css')}}

<!-- Supersized -->
{{HTMl::style('_guest/css/supersized.css')}}
{{HTML::style('_guest/css/supersized.shutter.css')}}

<!-- Google Font 
{{HTML::style('http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900')}}
-->
<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
{{HTML::script('_guest/js/modernizr.js')}}


<!-- Analytics
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
 End Analytics -->

</head>


<body>

<!-- This section is for Splash Screen -->
<div class="ole">
<section id="jSplash">
	<div id="circle"></div>
</section>
</div>
<!-- End of Splash Screen -->


<!-- Homepage Slider -->
    @include('guest/_partials.slider')
<!-- End Homepage Slider -->

<!-- Header -->
    @include('guest/_partials.header')
<!-- End Header -->

<!-- Our Work Section -->
    @include('guest/_partials.work')
<!-- End Our Work Section -->

<!-- About Section -->
    @include('guest/_partials.about')
<!-- End About Section -->

<!-- Contact Section -->
    @include('guest/_partials.contact')
<!-- End Contact Section -->

<!-- Twitter Feed -->
    
<!-- End Twitter Feed -->

<!-- Socialize -->

<!-- End Socialize -->
    @include('guest/_partials.socials')
<!-- Footer -->
    @include('guest/_partials.footer')
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" href="#">
	<i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->


<!-- Js -->
{{HTML::script('_guest/js/jquery.min.js')}} <!-- jQuery Core -->
{{HTML::script('_guest/js/bootstrap.min.js')}} <!-- Bootstrap -->
{{HTML::script('_guest/js/supersized.3.2.7.min.js')}} <!-- Slider -->
{{HTML::script('_guest/js/waypoints.js')}} <!-- WayPoints -->
{{HTML::script('_guest/js/waypoints-sticky.js')}} <!-- Waypoints for Header -->
{{HTML::script('_guest/js/jquery.isotope.js')}} <!-- Isotope Filter -->
{{HTML::script('_guest/js/jquery.fancybox.pack.js')}} <!-- Fancybox -->
{{HTML::script('_guest/js/jquery.fancybox-media.js')}} <!-- Fancybox for Media -->
{{HTML::script('_guest/js/jquery.tweet.js')}} <!-- Tweet -->
{{HTML::script('_guest/js/plugins.js')}} <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
{{HTML::script('_guest/js/main.js')}} <!-- Default JS -->
<!-- End Js -->

</body>
</html>