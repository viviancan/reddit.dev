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


Route::get('/', 'HomeController@showWelcome');
Route::resource('posts', 'PostsController');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/logout', function(){
	Auth::logout();
});













Route::get('/uppercase/{word}', 'HomeController@uppercase');

Route::get('/lowercase/{word}', 'HomeController@lowercase');

Route::get('/increment/{number}', 'HomeController@increment');

Route::get('/zero', 'HomeController@resetToZero');


Route::get('/add/{num1}/{num2}', 'HomeController@add');

Route::get('/sayhello/{name?}', 'HomeController@sayHello');

Route::get('/rolldice/{guess}', 'HomeController@rolldice');



Route::get('sample/{str}', 'SampleController@firstLetter');

Route::get('/process/{num}', 'SampleController@processNum');

Route::get('/double/{num}', 'SampleController@doubleNum');

Route::get('/triple/{num}', 'SampleController@tripleNum');


// lecture on dogs
// Route::get('orm-test' , function(){
	// $dog = new App\Models\Dog();
	// $dog->name = 'Sparky';
	// $dog->breed = 'Pug';
	// $dog->age = 2;
	// $dog->save();

	// $dogs = App\Models\Dog::all();
	// dd($dogs);

	// $dog = App\Models\Dog::find(1);
	// echo $dog->name;

	// $dog = App\Models\Dog::find(1);
	// $dog->name = "Ace";
	// $dog->save();


	// $dog = App\Models\Dog::find(3);
	// $dog->delete();


// });











