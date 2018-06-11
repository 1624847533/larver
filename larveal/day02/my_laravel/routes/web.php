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

Route::get('Admin/index','Admin\AdminController@index');
Route::get('Admin/add','Admin\AdminController@add');
Route::get('Admin/update','Admin\AdminController@update');
Route::get('Admin/delete','Admin\AdminController@delete');
Route::post('Admin/addSave','Admin\AdminController@addSave');
Route::post('Admin/save','Admin\AdminController@save');

Route::get('Login/index','Login\LoginController@index');
Route::post('Login/login','Login\LoginController@login');
