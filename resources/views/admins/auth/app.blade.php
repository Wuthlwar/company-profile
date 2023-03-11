<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pro1 Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/login/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/login/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/login/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/login/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/login/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/login/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body class="h-screen" style="background-image: url({{ asset('html/wall.jpg') }});background-repeat: no-repeat!important; background-size: cover!important;
background-position: center!important;">

	<div class="limiter">
		<div class="container-login100">
			@yield('content')
		</div>
	</div>




<!--===============================================================================================-->
	<script src="{{ asset('admin/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('admin/login/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('admin/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('admin/login/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('admin/login/vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('admin/login/js/main.js') }}"></script>

</body>
</html>
