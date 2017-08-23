@extends('layouts.master')

@section('title')
	<title>Roll the Dice!</title>
@stop

@section('content')
	<div class="container">
		
			@if($guess == $random)
				<h1 id="correct">Yay you guessed correct!</h1>
			@else
				<h1 id="incorrect">Sorry you did not guess correctly!</h1>
			@endif
			
			<h1>Random Number: {{ $random }}</h1>
			
			<h1>Guess: {{ $guess }}</h1>
			
	</div>
@stop
	
