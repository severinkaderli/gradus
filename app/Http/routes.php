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


//Registration
Route::get('register', 'PageController@register');
Route::post('register', 'Auth\AuthController@postRegister');

//Authentication
Route::get('login', 'PageController@home');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');


//Static pages
Route::get('/', 'PageController@home');

//Groups
Route::resource('groups', "GroupController");

//Subjects
Route::get('groups/{groups}/subjects/create', "SubjectController@create");
Route::post('groups/{groups}/subjects', "SubjectController@store");
Route::get('subjects/{subjects}/edit', "SubjectController@edit");
Route::patch('subjects/{subjects}', "SubjectController@update");
Route::delete('subjects/{subjects}', "SubjectController@destroy");
