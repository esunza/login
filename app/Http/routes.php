<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');


//Route::get('/catalogo-clientes', 'ClientesController@index');
//Route::get('/agregar-cliente', 'ClientesController@create');
//Route::get('/catalogo-clientes/{id}', 'ClientesController@show');
//Route::post('/insertar-cliente', 'ClientesController@store');
//Route::get('/editar-cliente/{id}', 'ClientesController@edit');

//Route::get('/actualizar-cliente/{id}', 'ClientesController@update');

Route::resource('clientes', 'ClientesController');

Route::get('/clientes/{id}/eliminar', 'HomeController@eliminar');


