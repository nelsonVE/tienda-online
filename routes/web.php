<?php

Route::get('/', function () {
    return view('home.index');
});

Route::get('/registro', 'UsuarioController@create');
Route::get('/ingresar', 'UsuarioController@index');
Route::post('/usuario', 'UsuarioController@store');
Route::post('/usuario/login', 'UsuarioController@login');