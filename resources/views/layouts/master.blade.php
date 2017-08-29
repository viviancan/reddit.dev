<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		@yield('title')

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Raleway" rel="stylesheet">

	</head>
	<body>

		<div class='navbar'>
			<ul>
				<div class="alignleft">
					<li><a href="/posts">All Posts</a></li>
					<li><a href="/posts/create">Create Post</a></li>

				</div>
			</ul>

		</div>	

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





