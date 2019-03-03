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

Route::get('/admin', 'UserController@index')->name('admin');

Route::get('/list_user', 'UserController@list_user')->name('list_user');
Route::get('/add_user', 'UserController@getAddUser')->name('add_user');
Route::post('/add_user', 'UserController@postAddUser')->name('add_user');
Route::get('/edit_user/{id}', 'UserController@getEditUser')->name('edit_user');
Route::post('/edit_user/{id}', 'UserController@postEditUser')->name('edit_user');
Route::get('del_list_user/{id}','UserController@getDelUsers');