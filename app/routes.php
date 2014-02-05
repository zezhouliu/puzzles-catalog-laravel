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

Route::post('/courses/{id}', 'CourseController@update');
Route::delete('/courses/{id}', 'CourseController@destroy');
Route::resource('courses', 'CourseController');
Route::post('/faculty/{id}', 'FacultyController@update');
Route::delete('/faculty/{id}', 'FacultyController@destroy');
Route::resource('faculty', 'FacultyController');
Route::post('/fields/{id}', 'FieldController@update');
Route::delete('/fields/{id}', 'FieldController@destroy');
Route::resource('fields', 'FieldController');
Route::controller('/', 'BaseController');
