@extends('layouts.master')

@section('title')
	<title>Show - Show Specific Posts</title>
@stop

@section('content')
	<main class="container">

		<h2>Show specific Posts</h2>
		<!-- {{ $post }} -->
		
		<p>Title: {{$post->title}}</p>
		<a href="{{ action('PostsController@edit', $post->id) }}"><span>Edit this post</span></a>
		<p>Url: {{$post->url}}</p>
		<p>Content: {{$post->content}}</p>
		<p>Created By: User {{$post->created_by}}</p>
		<p>Created At: {{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}</p>
		<p>Updated At: {{$post->updated_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}</p>


		<hr>

	</main>


@stop