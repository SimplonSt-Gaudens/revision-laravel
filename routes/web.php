<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UserController@index')->name('users');

Route::get('/annonces', 'AnnonceController@index')->name('list');
Route::get('/annonce/{id}', 'AnnonceController@show')->name('annonce');
Route::get('/annonces/get', 'AnnonceController@create')->name('form');
Route::post('/annonces/post', 'AnnonceController@store')->name('post');

/**
 * Route Groupe qui va définir les routes protégé par un middleware 
 * ou si il y à une seul route utiliser Route::[get/post]('/route', callback)->middleware('middlewarename')
 */

Route::group(['middleware' => 'admin'], function(){
	Route::get('/panel', function(){
		echo 'Vous êtes admin GGWP !';
	});
	Route::get('/admin', function(){
		echo 'Vous êtes admin GGWP !';
	});
});