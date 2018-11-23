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
            'id_libro' => $data['libro'],
            'id_estudiante' => $data['estudiante'],
            'id_empleado' => $data['empleado'],
            'prestamo' => $data['prestamo'],
            'entrega' => $data['entrega']
        ]);

        return view('prestamos.index');
    }

    public function listado(){

        $prestamos = Prestamo::all();

        return view('prestamos.listadoPrestamos', compact('prestamos'));
    }
}
