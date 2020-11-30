<!DOCTYPE html>
<html>
<head>
	<title>Ma Premier Projet en Laravel Voyager</title>
	<link rel="stylesheet"  href="{{ asset('css/bootstrap.min.css') }}">

	@yield('stylesheet')
</head>
<body>


	@include('parchose.navbar')

	<div class="container mt-4">
		@yield('content')
	</div>


<script  src="{{asset('js/bootstrap.min.js')}}"></script>
<script  src="{{asset('js/jquery-3.3.1.js')}}"></script>
@yield('javascripts')
</body>
</html>