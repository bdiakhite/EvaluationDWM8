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

Route::get('/', 'BaseController@index');
Route::get('/create', 'CreateController@index');

Route::post('/player/insert', 'PlayerController@insertOne');

Route::get('/player/delete/{id}', 'PlayerController@deleteOne');
Route::post('/player/update/{id}', 'PlayerController@updateOne');
Route::post('/player/update', 'PlayerController@updateOneAction');
