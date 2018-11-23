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
Route::get('/libros/buscar', 'LibrosController@buscar')->name('buscarLibros');
Route::post('/libros/buscar', 'LibrosController@search')->name('search');

//Rutas Estudiantes
Route::get('/estudiantes', 'EstudiantesController@index')->name('indexEstudiantes');
Route::get('/estudiantes/registrar', 'EstudiantesController@registrar')->name('registrarEstudiantes');
Route::post('/estudiantes/registrar', 'EstudiantesController@registrarBD')->name('registrarEBD');
Route::get('/estudiantes/listado', 'EstudiantesController@listado')->name('listaEstudiantes');

//Rutas Empleados
Route::get('/empleados', 'EmpleadoController@index')->name('indexEmpleados');
Route::get('/empleados/registrar', 'EmpleadoController@registrar')->name('registrarEmpleados');
Route::post('/empleados/registrar', 'EmpleadoController@registrarBD')->name('registrarEmBD');
Route::get('/empleados/listado', 'EmpleadoController@listado')->name('listaEmpleados');

//Rutas Prestamos
Route::get('/prestamos', 'PrestamosController@index')->name('indexPrestamos');
Route::get('/prestamos/registrar', 'PrestamosController@registrar')->name('registrarPrestamos');
Route::post('/prestamos/registrar', 'PrestamosController@registrarBD')->name('registrarPBD');
Route::get('/prestamos/listado', 'PrestamosController@listado')->name('listaPrestamos');