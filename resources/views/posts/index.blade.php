@extends('layouts.master')



@section('title')
	<title>Index - Show All Posts</title>
@stop

@section('content')
	<main class="container">

		<h1>Show all Posts</h2>
		<h3>Total Results: {{ $posts ->total() }}</h3>

		@foreach($posts as $post)
			<h3><a href="{{ action('PostsController@show', $post->id) }}">	{{ $post->id }}) {{$post->title}}</a></h3>
			<p>Url: {{$post->url}}</p>
			<p>Content: {{$post->content}}</p>
			<p>Created By: {{$post->user->name}}</p>
			<p>Created at: {{ $post->created_at }}</p>
			<p>Updated at: {{ $post->updated_at }}</p>
			<hr>
		@endforeach

		{!! $posts->render() !!}


	</main>


@stop