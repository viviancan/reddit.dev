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

		<nav class="navbar navbar-default" role="navigation">
		  <!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>

			</button>
		  </div>

		  <!-- Collect the nav links, forms, and other content for toggling -->

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					@if (Auth::check())

					<li><a href="{{ action('PostsController@index') }}">Posts</a></li>

					<li><a href="{{ action('PostsController@create') }}">Create Post</a></li>

					<li><a href="{{ action('Auth\AuthController@getLogout') }}">Logout</a></li>

					@else
					<li><a href="{{ action('Auth\AuthController@getRegister') }}">Register</a></li>

					<li><a href="{{ action('Auth\AuthController@getLogin')}}">Login</a></li>

					@endif
				</ul>

			<div class="nav navbar-nav navbar-right">
					<form class="navbar-form" role="search">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search" name="q">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
							</div>
						</div>
					</form>
			</div>

		</nav>

		{{ (Auth::check()) ? "User is logged in": "user is logged out" }}
		{{ Auth::id() }}
		{{ Auth::user() }}




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





