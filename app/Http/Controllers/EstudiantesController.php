<?php

namespace App\Http\Controllers;

use App\Estudiante;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    public function index(){
        return view('estudiantes.index');
    }

    public function registrar(){
        return view('estudiantes.registrarEstudiantes');
    }

    public function registrarBD(){
        $data = request()->all();

        Estudiante::create([
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'cedula' => $data['cedula'],
            'correo' => $data['correo']
        ]);

        return view('estudiantes.index');
    }

    public function listado(){

        $estudiantes = Estudiante::all();

        return view('estudiantes.listaEstudiantes', compact('estudiantes'));
    }
}
