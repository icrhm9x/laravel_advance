<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ $title ?? 'quản trị' }} - ADMIN</title>
	<!-- css -->
	<link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">
	
	<link href="{{ asset('assets/admin/css/styles.css') }}" rel="stylesheet">
	<!--Icons-->
	<script src="{{ asset('assets/admin/js/lumino.glyphs.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('assets/admin/Awesome/css/all.css') }}">
</head>
<body>
	<!-- header -->
	@include('admin.layouts.nav')
	<!-- header -->
	<!-- sidebar left-->
	@include('admin.layouts.sidebar')
	<!--/. end sidebar left-->

	<!--main-->
	@yield('content')
	<!--end main-->

	<!-- javascript -->
	<script src="{{ asset('assets/admin/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/admin/js/chart.min.js') }}"></script>
	<script src="{{ asset('assets/admin/js/chart-data.js') }}"></script>
	@stack('adminJs')

</body>

</html>