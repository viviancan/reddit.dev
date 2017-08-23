<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sayhello', function()
{

	return "Hello Codeup!";

});

// Route::get('/sayhello/{name?}', function($name = 'World')
// {
// 	return "Hello, $name!";
// });



Route::get('/sayhello/{name}', function($name)
{

	if($name == "Kelly"){
		return redirect('/');
	}

	return "Hello, $name!";

});

Route::get('/uppercase/{input}', function($input)
{
	return strtoupper($input);
});

Route::get('/increment/{input}', function($input)
{

	return $input + 1;


});

Route::get('/add/{number1}/{number2}', function($number1, $number2)
{

	return $number1 + $number2;

});












