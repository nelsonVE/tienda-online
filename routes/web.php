<?php

Route::get('/', 'UsuarioController@index');
Route::get('/registro', 'UsuarioController@create');
Route::get('/ingresar', 'UsuarioController@ingresar');
Route::get('/usuario/salir', 'UsuarioController@salir');
Route::post('/usuario', 'UsuarioController@store');
Route::post('/usuario/login', 'UsuarioController@login');