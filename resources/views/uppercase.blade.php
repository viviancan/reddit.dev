@extends('layouts.master')

@section('title')
	<title>UpperCased</title>
@stop

@section('content')
	<div class="container">

		<h1>Original word: {{ $word }} </h1>
		<h1>UpperCased: {{ $wordUpper }} </h1>
		<a href="{{ action('HomeController@lowercase', array($wordUpper)) }}">To LowerCase</a>
		
	</div>
@stop