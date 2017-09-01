@extends('layouts.master')

@section('title')
	<title>Show - Show Specific Posts</title>
@stop

@section('content')
	<main class="container">

		<h2>{{$post->title}}</h2>
		<p>Url: {{$post->url}}</p>
		<p>Content: {{$post->content}}</p>
		<a href="{{ action('UsersController@show', $post->created_by)}}"><p>Created By: User {{$post->user->name}}</p></a>
		<p>Created At: {{$post->created_at }}</p>
		<p>Updated At: {{$post->updated_at }}</p>

		@if($post->created_by == Auth::id())
			<!-- <a href="{{ action('PostsController@edit', $post->id) }}"><span>Edit this post</span></a> -->

			<a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-info" role="button">Edit this post</a>

		@endif


	</main>


@stop