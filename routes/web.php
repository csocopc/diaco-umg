<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Rutas de la entidad 'Comercio'
Route::get('/comercios/index', 'ComerciosController@index')->middleware('auth');
Route::get('/comercios/agregar', 'ComerciosController@agregar')->middleware('auth');
Route::get('/comercios/editar/{id?}', 'ComerciosController@agregar')->middleware('auth');
Route::post('/comercios/guardar', 'ComerciosController@guardar')->middleware('auth');
Route::post('/comercios/eliminar', 'ComerciosController@eliminar')->middleware('auth');

// Admin - Reportes
Route::get('/reportes', 'ReportesController@index')->middleware('auth');
Route::post('/reportes/obtener', 'ReportesController@obtenerDatos')->middleware('auth');
Route::get('/reportes/obtener', 'ReportesController@obtenerDatos')->middleware('auth');


// Rutas para quejas
Route::get('/quejas/index', 'QuejasController@index')->middleware('auth');
Route::get('/quejas/detalles/{id}', 'QuejasController@detalles')->middleware('auth');


/////// Paginas publicas
// Consumidor
Route::get('/', 'PublicController@index');
Route::get('/queja/consumidor', 'PublicController@consumidor');
Route::post('/queja/consumidor', 'PublicController@consumidor');
Route::post('/queja/consumidor-guardar', 'PublicController@consumidorGuardar');

/// Comercios
Route::get('/queja/comercio', 'PublicController@comercio');
Route::post('/queja/comercio', 'PublicController@comercio');
Route::post('/queja/comercio-guardar', 'PublicController@comercioGuardar');

/// Queja
Route::get('/queja/detalle', 'PublicController@detalle');
Route::post('/queja/detalle-guardar', 'PublicController@detalleGuardar');

/// Queja
Route::get('/queja/final/{id}', 'PublicController@paginaFinal');