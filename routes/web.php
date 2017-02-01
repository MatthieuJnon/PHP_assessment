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

Route::get('home', 'HomeController@index');

Route::get('/vehicles', 'vehicles@index');
Route::get('/vehicles/add', 'vehicles@add');
Route::get('/vehicles/delete', 'vehicles@delete');
Route::get('/vehicles/modify', 'vehicles@modify');
Route::get('/vehicles/{vehicle}', 'vehicles@show');

