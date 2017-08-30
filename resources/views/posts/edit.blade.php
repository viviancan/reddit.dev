@extends('layouts.master')



@section('title')
	<title>Posts Edit Form</title>

@stop


@section('content')
	<main class="container">


		<h1>Posts Edit Form</h1>

		<form action="{{ action('PostsController@update' , $post->id) }}" method="POST">

			{!! csrf_field() !!}


			<div class="form-group">

				<input class="form-control" type="text" name="title" value="{{ $post->title }}" placeholder="Enter Name">
				
			</div>

			<div class="form-group">
				
				<input class="form-control" type="text" name="content" value="{{ $post->content }}" placeholder="Enter Content">

			</div>

			<div class="form-group">
				
				<input class="form-control" type="text" name="url" value="{{ $post->url }}" placeholder="url">

			</div>


			<button class="btn btn-success">Submit Changes</button>

			{{ method_field('PUT') }}

		</form>

		<form method="POST" action="{{ action('PostsController@destroy', $post->id) }}">

			{!! csrf_field() !!}

			<button class="btn btn-danger">Delete Post</button>

			{{ method_field('DELETE') }}
			
		</form>

	</main>
@stop
