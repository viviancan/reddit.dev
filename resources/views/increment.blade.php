@extends('layouts.master')

@section('title')

@stop

@section('content')
	<div class="container">

		<h1> {{ $number }} </h1>

		<h1><a href="{{ action('HomeController@increment', array($number)) }}">Add 1 </a></h1>
		
	</div>

@stop

