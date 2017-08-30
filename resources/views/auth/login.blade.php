
@extends('layouts.master')



@section('title')
	<title>Login</title>

@stop

@section('content')
	<main class="container">

		<form method="POST" action="/auth/login">
		    {!! csrf_field() !!}

		    <div class="form-group">
		        Email
		        <input class="form-control"  type="email" name="email" value="{{ old('email') }}">
		    </div>

		    <div class="form-group">
		        Password
		        <input class="form-control"  type="password" name="password" id="password">
		    </div>

		    <div class="form-group">
		        <input type="checkbox" name="remember"> Remember Me
		    </div>

		    <div>
		        <button class="btn btn-success" type="submit">Login</button>
		    </div>
		</form>



	</main>
@stop


