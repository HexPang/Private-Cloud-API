<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/','ViewController@ShowView');
Route::get('/{view}','ViewController@ShowView');
Route::post('/{view}','ViewController@PostRequest');

Route::get('/application/{view}','ApplicationController@ShowView');
Route::post('/application/{view}','ApplicationController@PostRequest');
