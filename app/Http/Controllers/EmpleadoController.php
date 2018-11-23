<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index(){
        return view('empleados.index');
    }

    public function registrar(){
        return view('empleados.registrarEmpleados');
    }

    public function registrarBD(){
        $data = request()->all();

        Empleado::create([
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'cedula' => $data['cedula'],
            'correo' => $data['correo']
        ]);

        return view('empleados.index');
    }

    public function listado(){

        $empleados = Empleado::all();

        return view('empleados.listaEmpleados', compact('empleados'));
    }
}
