<?php

Route::get('/', 'UsuarioController@index');
Route::get('/registro/{referencia?}', 'UsuarioController@create')->middleware('checklogged');
Route::get('/ingresar', 'UsuarioController@ingresar')->middleware('checklogged');
Route::get('/usuario/salir', 'UsuarioController@salir')->middleware('checklogin');
Route::get('/usuario/perfil', 'UsuarioController@perfil')->middleware('checklogin');
Route::post('/usuario', 'UsuarioController@store');
Route::post('/usuario/login', 'UsuarioController@login');

Route::get('/email-verification/{key}', 'VerificacionController@verificar');

Route::get('/admin', 'AdminController@index')->middleware('checkadmin');

Route::get('/admin/productos/{codigo?}', 'ProductoController@showall')->middleware('checkadmin');
Route::get('/admin/producto/editar/{id}', 'ProductoController@edit')->middleware('checkadmin');
Route::post('/admin/productos', 'ProductoController@update')->middleware('checkadmin');
Route::get('/admin/producto/agregar', 'ProductoController@create')->middleware('checkadmin');
Route::post('/admin/producto/agregar', 'ProductoController@store')->middleware('checkadmin');

Route::get('/admin/usuarios', 'UsuarioController@showall')->middleware('checkadmin');