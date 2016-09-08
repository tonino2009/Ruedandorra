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
//Route::resource('horariosemanal','HorarioController2');

//Route::get('grabarueda','HoraryController@grabarRueda' );
Route::get('listausuarios/activar/{id}','UsuarioController@activar' );
Route::get('listausuarios/haceradmin/{id}','UsuarioController@hacerAdmin' );
Route::get('ruedator/grabar','HoraryController@grabarRueda');
Route::resource('rueda','RuedaController');
Route::resource('listausuarios','UsuarioController');
Route::resource('horariosemanal','HoraryController');
Route::resource('horarionormal','HoraryNormalController');
Route::resource('tareas','TaskController');
//Route::resource('','HoraryController');
Route::get('ruedator','HoraryController@ruedator' );

Route::resource('/','HomeController');

//Route::resource('controles','UsuarioController@activar');

//Route::resource('listausuarios/activar','UsuarioController@activar');




Route::get('ruedator4343', function () {
    return view('ruedator');
});

Route::group(['middleware' => ['web']], function () {
	

});


