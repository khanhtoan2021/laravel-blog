<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('/css/all.css') }}" />
	<link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}" />
	<title>Laravel Hello</title>
</head>
<body>
	@include('layouts.header')
	@yield('content')
	@include('layouts.footer')
	<script src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('/js/jquery-3.6.0.min.js') }}"></script>
	<script src="{{ URL::asset('/js/style.js') }}"></script>
</body>
</html>