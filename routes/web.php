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
Route::any('add', 'ControllerExcel@add');
Route::any('edit', 'ControllerExcel@edit');

//excel 匯入
Route::any('testimport', 'ControllerExcel@import');

//excel匯出
Route::any('testexport', 'ControllerExcel@export');
Route::any('b', 'ControllerExcel@tableB');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
