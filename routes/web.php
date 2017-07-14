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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/job', 'JobController@index');
Route::get('/addjob', 'JobController@create');
Route::post('/storejob', 'JobController@store');
Route::get('editjob/{id}', 'JobController@edit');
Route::post('updatejob/{id}', 'JobController@update');
Route::get('deletejob/{id}', 'JobController@destroy');

Route::get('/data', 'DataController@index');
Route::get('/adddata', 'DataController@create');
Route::post('/storedata', 'DataController@store');
Route::get('/editdata/{id}', 'DataController@edit');
Route::post('/updatedata/{id}', 'DataController@update');
Route::get('/deletedata/{id}', 'DataController@destroy');