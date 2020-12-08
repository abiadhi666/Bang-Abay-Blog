<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	{{-- Meta Google --}}
	<meta name="Description" CONTENT="Author: Abi Adhitama, Website Blogbay (Blog Bang Abay)">
    <meta name="google-site-verification" content="+nxGUDJ4QpAZ5l9Bsjdi102tLVC21AIh5d1Nl23908vVuFHs34="/>
    <meta name="robots" content="noindex,nofollow">

	<title>Callie HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

    @include('blog.layouts.header')

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
            @yield('content')
		</div>
		<!-- /container -->
	</div>
    <!-- /SECTION -->

    @include('blog.layouts.footer')

	<!-- jQuery Plugins -->
	<script src="{{asset('public/frontend/js/jquery.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.stellar.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/main.js')}}"></script>

</body>

</html>