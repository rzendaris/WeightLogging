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

Route::get('/', 'WeightLoggingController@index');

Route::post('insert', 'WeightLoggingController@insert');

Route::get('show/{id}', 'WeightLoggingController@show');
Route::get('edit/{id}', 'WeightLoggingController@edit');

Route::post('update', 'WeightLoggingController@update');

