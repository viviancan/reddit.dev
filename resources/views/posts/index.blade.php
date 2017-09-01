@extends('layouts.master')



@section('title')
	<title>Index - Show All Posts</title>
@stop

@section('content')
	<main class="container">

		<h1>Show all Posts</h2>

		 @if($posts->count() == 0)

		 	<h3>Sorry, results not found.</h3>

		 @else

		 <h3>Total Results: {{ $posts->total() }}</h3>

			@foreach($posts as $post)
				<h3><a href="{{ action('PostsController@show', $post->id) }}">{{$post->title}}</a></h3>
				<p>Url: {{$post->url}}</p>
				<p>Content: {{$post->content}}</p>

				@if(Auth::check())
					<a href="{{ action('UsersController@show', $post->created_by)}}"><p>Created By: {{$post->user->name}}</p></a>
				@else 
					<p>Created By: {{$post->user->name}}</p>
				@endif

				<p>Created at: {{ $post->created_at }}</p>
				<p>Updated at: {{ $post->updated_at }}</p>
				<hr>
			@endforeach

		@endif

		{!! $posts->appends(Input::all())->render() !!}



	</main>


@stop