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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/queja', function () {
    return view('queja');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Rutas de la entidad 'Comercio'
Route::get('/comercios/index', 'ComerciosController@index')->middleware('auth');
Route::get('/comercios/agregar', 'ComerciosController@agregar')->middleware('auth');
Route::get('/comercios/editar/{id?}', 'ComerciosController@agregar')->middleware('auth');
Route::post('/comercios/guardar', 'ComerciosController@guardar')->middleware('auth');
Route::post('/comercios/eliminar', 'ComerciosController@eliminar')->middleware('auth');