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

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UserController@index')->middleware('auth');
Route::get('/users/table', 'UserController@fillUsersTable')->middleware('auth');
Route::get('/users/create', 'UserController@create')->middleware('auth');
Route::get('/users/{id}/edit', 'UserController@edit')->middleware('auth');
Route::post('/users', 'UserController@store')->middleware('auth');
Route::post('/users/{id}', 'UserController@update')->middleware('auth');

Route::get('/customers', 'CustomerController@index')->middleware('auth');
Route::get('/customers/create', 'CustomerController@create')->middleware('auth');
Route::post('/customers', 'CustomerController@store')->middleware('auth');
