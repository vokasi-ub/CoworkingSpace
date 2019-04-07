<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Next Coworking Space</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('assetsFrontend/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('assetsFrontend/images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assetsFrontend/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('assetsFrontend/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assetsFrontend/css/responsive.css')}}">
    <link href="{{ asset('assets/dist/summernote.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/sweetalert-master/src/sweetalert.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assetsFrontend/css/custom.css')}}">
	<script src="{{ asset('assetsFrontend/js/modernizr.js')}}"></script> <!-- Modernizr -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	
	
</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
			<div id="loader"></div>  
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    @yield('content')

	
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
          @include('layouts.front.regNavbar')
    </nav>
	
	
    <div class="copyrights">
          @include('layouts.front.foot')

    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="{{ asset('assetsFrontend/js/all.js')}}"></script>
	<!-- Camera Slider -->
	<script src="{{ asset('assetsFrontend/js/jquery.mobile.customized.min.js')}}"></script>
	<script src="{{ asset('assetsFrontend/js/jquery.easing.1.3.js')}}"></script> 
	<script src="{{ asset('assetsFrontend/js/parallaxie.js')}}"></script>
	<script src="{{ asset('assetsFrontend/js/headline.js')}}"></script>
	<!-- Contact form JavaScript -->
    <script src="{{ asset('assetsFrontend/js/jqBootstrapValidation.js')}}"></script>
    <script src="{{ asset('assetsFrontend/js/contact_me.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('assetsFrontend/js/custom.js')}}"></script>
    <script src="{{ asset('assetsFrontend/js/jquery.vide.js')}}"></script>
    <script src="{{ asset('assetsFrontend/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assetsFrontend/js/bootstrap-filestyle.min.js')}}"></script>
    <script src="{{ asset('assets/dist/summernote.js')}}"></script>
    <script src="{{ asset('assets/sweetalert-master/src/sweetalert.js')}}"></script>
<script>
             $(document).ready(function() {
              $('#summernote').summernote();
            });

            $('#summernote').summernote({
                height: 100,    
                minHeight: 150,     
                maxHeight: 400,    
                focus: false    
            });
          </script>
</body>
</html>