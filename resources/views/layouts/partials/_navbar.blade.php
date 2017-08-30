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
					<li><a href="{{ action('PostsController@index') }}">Posts</a></li>

					@if (Auth::check())

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
							<div class="input-group-btn">`
								<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
							</div>
						</div>
					</form>
			</div>

		</nav>