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
Route::resource('cliente', 'ClienteController');
Route::resource('admin','AdminController');
Route::name('cliente.eliminar')->post('cliente/eliminar','ClienteController@eliminar');
Route::name('cliente.apdatecli')->post('cliente/apdatecli','ClienteController@apdatecli');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('cliente', 'ClienteController'); //mas recomendable

Route::name('cliente.elimina')->post('cliente/elimina', 'ClienteController@elimina');
