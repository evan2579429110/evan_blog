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
\Illuminate\Support\Facades\Blade::setContentTags('L{','}L');

//Route::get('/', function () {
//    return File::get(public_path().'/angular/index.html');
//});


//Route::resource('user','UserController');


//Route::filter('csrf', function()
//{
//	if (Session::token() != Input::get('_token'))
//	{
//		throw new Illuminate\Session\TokenMismatchException;
//	}
//});
//Route::get('/home', 'HomeController@index');




//\Illuminate\Support\Facades\Blade:setEscapedContentTags('<%%', '%%>');     // for escaped data
Route::auth();



Route::get('/','HomeController@index');
Route::resource('article/','ArticleController');

