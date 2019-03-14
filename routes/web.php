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

/*
* Ver usuario
*/
Route::get('/usuario/{usuario}', 'UserController@show')->name('usuarios.show');

/*
* Grupo de rutas de administrador
*/
Route::middleware(['auth', 'role:admin'])->group(function () {

	Route::get('/usuarios', 'UserController@index')->name('usuarios.index');

	Route::get('/usuarios/create', 'UserController@create')->name('usuarios.create');

	Route::post('/usuarios', 'UserController@store')->name('usuarios.store');

	Route::get('/usuarios/{usuario}/edit', 'UserController@edit')->name('usuarios.edit');

	Route::put('/usuarios/{usuario}', 'UserController@update')->name('usuarios.update');


	Route::delete('/usuarios/{usuario}', 'UserController@destroy')->name('usuarios.destroy');

	Route::get('getroles', 'SearchController@getroles')->name('getroles');
});

