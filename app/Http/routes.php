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

Route::get('/', 'customController@index');

Route::get('home', 'HomeController@index');
Route::get('survey', ['as' => 'survey', 'uses' => 'surveyController@index']);

Route::post('survey',  ['as' => 'survey_store', 'uses' => 'surveyController@store']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
