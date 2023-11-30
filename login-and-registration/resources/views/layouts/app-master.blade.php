<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fixed Top Navbar</title>
	<link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
	
	<link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
</head>
<body>
	@include('layouts.partials.navbar')
	<main class="container">
		@yield('content')
	</main>
	
	<script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
</body>
</html>