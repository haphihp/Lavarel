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

Route::get('/', 'Job\JobController@index');

Route::get('view/{id}', 'Job\JobController@view');

Route::get('edit/{id}', 'Job\JobController@edit');

Route::get('create', 'Job\JobController@create');