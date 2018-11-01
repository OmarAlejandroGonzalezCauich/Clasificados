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

/*Inicia controlador login*/
Route::get('/', 'Auth\LoginController@ShowLoginForm');
Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::get('/home', 'HomeController@index')->name('home');
/*Termina controlador login*/

/*Controlador del Dashboard principal*/
Route::get('/main', function () {
    return view('contenido/contenido');
})->name('main');

//controlador users
Route::get('/users', 'UsersController@index');
Route::post('/users/registrar', 'UsersController@store');
Route::put('/users/actualizar', 'UsersController@update');
Route::put('/users/desactivar', 'UsersController@desactivar');
Route::put('/users/activar', 'UsersController@activar');

//controlador spots
Route::get('/spots', 'SpotsController@index');
Route::post('/spots/registrar', 'SpotsController@store');
Route::put('/spots/actualizar', 'SpotsController@update');
Route::put('/spots/desactivar', 'SpotsController@desactivar');
Route::put('/spots/activar', 'SpotsController@activar');

//controlador banners
Route::get('/banners', 'BannersController@index');
Route::post('/banners/registrar', 'BannersController@store');
Route::put('/banners/actualizar', 'BannersController@update');
Route::put('/banners/desactivar', 'BannersController@desactivar');
Route::put('/banners/activar', 'BannersController@activar');

//controlador categoria

/*Route::get('/categoria', 'CategoriaController@index');
Route::post('/categoria/registrar', 'CategoriaController@store');
Route::put('/categoria/actualizar', 'CategoriaController@update');
Route::put('/categoria/desactivar', 'CategoriaController@desactivar');
Route::put('/categoria/activar', 'CategoriaController@activar');*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
