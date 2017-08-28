
@extends('layouts.master')



@section('title')
	<title>Posts Create Form</title>

@stop

@section('content')
	<main class="container">


		<form action="{{ action('PostsController@store') }}" method="POST">
		{!! csrf_field() !!}

			<h1>Posts Create Form</h1>

			<input type="text" name="title" value="{{ old('title') }}"" placeholder="Enter title">
			<input type="text" name="content" value="{{ old('content') }}" placeholder="Enter Content">
			<input type="text" name="url" value="{{ old('url') }}" placeholder="url">


			<button>Submit</button>

		</form>

	</main>
@stop


