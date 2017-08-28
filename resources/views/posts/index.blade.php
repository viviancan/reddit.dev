@extends('layouts.master')

@section('title')
	<title>Index - Show All Posts</title>
@stop

@section('content')
	<main class="container">

		<h2>Show all Posts</h2>
		<!-- {{ $posts }} -->

		@foreach($posts as $post)
			<p><a href="{{ action('PostsController@show', $post->id) }}">Title: {{$post->title}}</a></p>
			<p>Url: {{$post->url}}</p>
			<p>Content: {{$post->content}}</p>
			<p>Created By: User {{$post->created_by}}</p>
			<hr>




		@endforeach


	</main>


@stop