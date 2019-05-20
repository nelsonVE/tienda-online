<?php

// --> Vistas de home
Route::get('/', 'UsuarioController@index');

// --> Usuario: Login y registro
Route::get('/registro/{referencia?}', 'UsuarioController@create')->middleware('checklogged');
Route::get('/ingresar', 'UsuarioController@ingresar')->middleware('checklogged');
Route::get('/usuario/salir', 'UsuarioController@salir')->middleware('checklogin');
Route::post('/usuario', 'UsuarioController@store');
Route::post('/usuario/login', 'UsuarioController@login');

// --> Usuario: Perfil
Route::get('/usuario/perfil', 'PerfilController@index')->middleware('checklogin');
Route::get('/usuario/referidos', 'ReferidoController@index')->middleware('checklogin');

// --> Verificaciones de usuario
Route::get('/email-verification/{key}', 'VerificacionController@verificar');

// --> Administración: Vistas misceláneas
Route::get('/admin', 'AdminController@index')->middleware('checkadmin');

// --> Administración: Productos
Route::get('/admin/productos/{codigo?}', 'ProductoController@showall')->middleware('checkadmin');
Route::get('/admin/producto/editar/{id}', 'ProductoController@edit')->middleware('checkadmin');
Route::post('/admin/productos', 'ProductoController@update')->middleware('checkadmin');
Route::get('/admin/producto/agregar', 'ProductoController@create')->middleware('checkadmin');
Route::post('/admin/producto/agregar', 'ProductoController@store')->middleware('checkadmin');

// --> Administración: Usuarios
Route::get('/admin/usuarios/{codigo?}', 'UsuarioController@showall')->middleware('checkadmin');
Route::get('/admin/usuario/editar/{id}', 'UsuarioController@edit')->middleware('checkadmin');
Route::post('/admin/usuarios', 'UsuarioController@update')->middleware('checkadmin');

// --> Administración: Compras
Route::get('/admin/compras/{codigo?}', 'CompraController@index')->middleware('checkadmin');
Route::get('/admin/compra/agregar', 'CompraController@create')->middleware('checkadmin');
Route::post('/admin/compra/agregar', 'CompraController@store')->middleware('checkadmin');
Route::post('/admin/compra/get_total', 'CompraController@getTotal')->middleware('checkadmin');