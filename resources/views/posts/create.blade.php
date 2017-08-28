
@extends('layouts.master')



@section('title')
	<title>Posts Create Form</title>

@stop

@section('content')
	<main class="container">




		<form action="{{ action('PostsController@store') }}" method="POST">
		{!! csrf_field() !!}

			<h1>Posts Create Form</h1>

			<div class="form-group">

				{!! $errors->first('title', '<span class="help-block">:message</span>') !!}

				<input class="form-control" type="text" name="title" value="{{ old('title') }}"" placeholder="Enter title">
				
			</div>

			<div class="form-group">
				
				{!! $errors->first('content', '<span class="help-block">:message</span>') !!}

				<input class="form-control" type="text" name="content" value="{{ old('content') }}" placeholder="Enter Content">
				
			</div>

			<div class="form-group">
				
				{!! $errors->first('url', '<span class="help-block">:message</span>') !!}

				<input class="form-control" type="text" name="url" value="{{ old('url') }}" placeholder="url">
				
			</div>


			<button>Submit</button>

		</form>

	</main>
@stop


