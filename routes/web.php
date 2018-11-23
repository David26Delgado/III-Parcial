<?php

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
})->name('home');

//Rutas Libros
Route::get('/libros', 'LibrosController@index')->name('indexLibros');
Route::get('/libros/registrar', 'LibrosController@registrar')->name('registrarLibros');
Route::post('/libros/registrar', 'LibrosController@registrarBD')->name('registrarBD');
Route::get('/libros/listado', 'LibrosController@listado')->name('listaLibros');

//Rutas Estudiantes
Route::get('/estudiantes', 'LibrosController@index')->name('indexLibros');
Route::get('/estudiantes/registrar', 'LibrosController@registrar')->name('registrarLibros');
Route::post('/estudiantes/registrar', 'LibrosController@registrarBD')->name('registrarBD');
Route::get('/estudiantes/listado', 'LibrosController@listado')->name('listaLibros');