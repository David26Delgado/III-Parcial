<?php

namespace App\Http\Controllers;

use App\Prestamo;
use App\Libro;
use App\Estudiante;
use App\Empleado;
use Illuminate\Http\Request;

class PrestamosController extends Controller
{
    public function index(){
        return view('prestamos.index');
    }

    public function registrar(){

        $libros = Libro::all();

        $estudiantes = Estudiante::all();

        $empleados = Empleado::all();

        return view('prestamos.registroPrestamos', compact('libros', 'estudiantes', 'empleados'));
    }

    public function registrarBD(){
        $data = request()->all();

        Prestamo::create([
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'cedula' => $data['cedula'],
            'correo' => $data['correo']
        ]);

        return view('prestamos.index');
    }

    public function listado(){

        $prestamos = Prestamo::all();

        return view('prestamos.listaPrestamos', compact('prestamos'));
    }
}
