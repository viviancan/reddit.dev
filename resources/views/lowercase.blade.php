@extends('layouts.master')

@section('title')
	<title>LowerCased</title>
@stop

@section('content')
	<div class="container">

		<h1>Original word: {{ $word }} </h1>
		<h1>LowerCased: {{ $wordLower }} </h1>

		<a href="{{ action('HomeController@uppercase', array($wordLower)) }}">To UpperCase</a>

		
	</div>
@stop