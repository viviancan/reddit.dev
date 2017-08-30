
@extends('layouts.master')



@section('title')
	<title>Register</title>

@stop

@section('content')
	<main class="container">
		<form method="POST" action="/auth/register">
		    {!! csrf_field() !!}

		    <div class="form-group">
		        Name
		        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
		    </div>

		    <div class="form-group">
		        Email
		        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
		    </div>

		    <div class="form-group">
		        Password
		        <input class="form-control" type="password" name="password">
		    </div>

		    <div class="form-group">
		        Confirm Password
		        <input class="form-control" type="password" name="password_confirmation">
		    </div>

		    <div>
		        <button class="btn btn-success" type="submit">Register</button>
		    </div>
		</form>



	</main>
@stop


