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

//Redireccion a la vista de inicio
Route::view('/','inicio')->name('inicio');

//Jugar
Route::get('/jugar','App\Http\Controllers\JugarController@index')->name('jugar');

//Estadisticas
Route::get('/estadisticas','App\Http\Controllers\EstadisticasController@index')->name('estadisticas');

//Rutas autenticacion
Auth::routes();




