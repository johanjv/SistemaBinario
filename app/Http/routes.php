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


//---------Usuarios---------------

Route::auth();
Route::get('/', 'HomeController@index');
Route::resource('registrar_usuario','UsuariosController');
Route::post('create','UsuariosController@create');
Route::get('listar','UsuariosController@listar');
Route::post('eliminar/{id}','UsuariosController@delete');

Route::post('createsin','UsuariosSinLoginController@create');