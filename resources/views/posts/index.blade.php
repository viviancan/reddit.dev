@extends('layouts.master')



@section('title')
	<title>Index - Show All Posts</title>
@stop

@section('content')
	<main class="container">

		<h1>Show all Posts</h2>
		<h3>Total Results: {{ $posts ->total() }}</h3>

		@foreach($posts as $post)
			<h3><a href="{{ action('PostsController@show', $post->id) }}">{{$post->title}}</a></h3>
			<p>Url: {{$post->url}}</p>
			<p>Content: {{$post->content}}</p>
			<p>Created By: User {{$post->created_by}}</p>
			<p>Created at: {{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}</p>
			<hr>
		@endforeach

		{!! $posts->render() !!}


	</main>


@stop