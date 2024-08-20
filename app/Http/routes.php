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
/*
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
   'auth' => 'Auth\AuthController',
   'password' => 'Auth\PasswordController',
]);*/
// Provide controller methods with object instead of ID
Route::model('bookmarks', 'bookmark');
Route::model('providers', 'Provider');
 
// Use slugs rather than IDs in URLs
Route::bind('bookmarks', function($value, $route) {
	return App\Providers::whereSlug($value)->first();
});

Route::resource('providers','ProviderController'); 
Route::resource('users.bookmarks', 'BookmarkController');
