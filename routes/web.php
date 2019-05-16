<?php

Route::get('/', 'UsuarioController@index');
Route::get('/registro/{referencia?}', 'UsuarioController@create')->middleware('checklogged');
Route::get('/ingresar', 'UsuarioController@ingresar')->middleware('checklogged');
Route::get('/usuario/salir', 'UsuarioController@salir')->middleware('checklogin');
Route::get('/usuario/perfil', 'UsuarioController@perfil')->middleware('checklogin');
Route::post('/usuario', 'UsuarioController@store');
Route::post('/usuario/login', 'UsuarioController@login');