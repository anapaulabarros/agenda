<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'ContatoController@listar');


/*    adding contatos routes    */
Route::get('contato/add', 'ContatoController@getAdd');
Route::post('contato/add', 'ContatoController@postAdd');