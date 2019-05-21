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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/parkir','ParkirController@index');
Route::get('/parkir/tambah','ParkirController@create');
Route::get('/parkir/store','ParkirController@store');
Route::get('/parkir/{id}/edit','ParkirController@edit');
Route::post('/parkir/{id}/update','ParkirController@update');
Route::get('/parkir/{id}/destroy','ParkirController@destroy');

Route::get('/enter','EnterController@index');
Route::get('/enter/{id}/masuk','EnterController@masuk');
Route::get('/enter/{id}/keluar','EnterController@keluar');

Route::get('/laporan','LaporanController@index');