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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PeopleController@index');

// Route::get('/people/{id}', 'PeopleController@index');
Route::get('/people/{mis_id}', 'PeopleController@show');




Route::get('/oracle', 'EbsController@index');

Route::get('/test', 'TestController@index');
