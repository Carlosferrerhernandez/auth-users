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
    return redirect('/login');
})->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarios', 'UserController@index')->name('usuarios.index');

Route::get('/usuarios/create', 'UserController@create')->name('usuarios.create');

Route::post('/usuarios', 'UserController@store')->name('usuarios.store');

Route::get('/usuarios/{$usuario}/edit', 'UserController@edit')->name('usuarios.edit');

Route::get('getroles', 'SearchController@getroles')->name('getroles');

