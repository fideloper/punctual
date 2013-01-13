<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

App::bind('link', function()
{
    return new Punctual\Storage\Link\Eloquent;
});

App::bind('user', function()
{
	return new Punctual\Storage\User\Eloquent;
});

/*
|
| Basic routes
|
*/

Route::get('/', function()
{
	$logged = Auth::check();
	$links = FALSE;

	if ( $logged )
	{
		$links = Auth::user()->links()->get();
	}

	return View::make('hello', [
		'logged' => $logged,
		'user' => Auth::user(),
		'links' => $links
	]);
});

Route::post('/login', function()
{
	Auth::attempt( ['email' => Input::get('email'), 'password' => Input::get('password')] );
	return Redirect::to('/');
});

Route::post('/submit', function()
{
	$link = App::make('link');

	$link->add([
		'title' => Input::get('title'),
		'url' => Input::get('url'),
		'user_id' => Auth::user()->id,
		'description' => Input::get('description'),
	]);

	return Redirect::to('/');
});

/*
|
| Api Controller
|
*/
Route::resource('api', 'ApiController');