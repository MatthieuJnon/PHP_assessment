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
})->middleware('auth');;


Auth::routes();

Route::get('home', 'HomeController@index');

Route::get('/vehicles', 'vehicles@index');
Route::get('/vehicles/create', 'vehicles@create');
Route::get('/vehicles/delete', 'vehicles@delete');
Route::get('/vehicles/modify', 'vehicles@modify');
Route::get('/vehicles/{vehicle}', 'vehicles@show');
Route::get('/vehicles/{vehicle}/edit', 'vehicles@edit');
Route::get('/vehicles/confirm/{vehicle}', 'vehicles@confirm');
Route::get('/vehicles/delete/{vehicle}', 'vehicles@delete');
Route::patch('/vehicles/{vehicle}', 'vehicles@update');

Route::post('/vehicles', 'vehicles@store');
