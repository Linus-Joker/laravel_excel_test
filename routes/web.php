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

Route::get('test', 'ControllerExcel@index');
Route::post('add', 'ControllerExcel@add');
Route::post('edit', 'ControllerExcel@edit');

Route::any('testexport', 'ControllerExcel@export');
Route::any('testimport', 'ControllerExcel@import');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
