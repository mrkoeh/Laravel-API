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

Route::get('produks', 'ProduksController@index');
Route::get('produks/{id}', 'ProduksController@show');
Route::post('produks', 'ProduksController@store');
Route::put('produks/{id}', 'ProduksController@update');
Route::delete('produks/{id}', 'ProduksController@delete');