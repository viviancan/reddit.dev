<!DOCTYPE html>
	<html>
	<head>

		@include('layouts.partials._head')
		@yield('title')

	</head>
	<body>

		@include('layouts.partials._navbar')



		@if (session()->has('successMessage'))
			<div class="alert alert-success">{{ session('successMessage') }}</div>
		@endif

		@if (session()->has('errorMessge'))
			<div class="alert alert-error">{{ session('errorMessge') }}</div>
		@endif

			@yield('content')




		<!-- jQuery Version 1.11.1 -->
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

	</body>
</html>





