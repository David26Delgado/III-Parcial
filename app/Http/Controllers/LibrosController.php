<?php

namespace App\Http\Controllers;

use App\Libro;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function index(){
        return view('libros.index');
    }

    public function registrar(){
        return view('libros.registrarLibro');
    }

    public function registrarBD(){
        $data = request()->all();

        Libro::create([
            'nombre' => $data['nombre'],
            'editorial' => $data['editorial'],
            'año' => $data['año'],
            'ubicacion' => $data['ubicacion'],
            'autor' => $data['autor'],
            'tipo' => $data['tipo'],
            'area' => $data['area'],
            'dias_prestamo' => $data['dias'],
        ]);

        return view('libros.index');
    }

    public function listado(){

        $libros = Libro::all();

        return view('libros.listaLibro', compact('libros'));
    }

    public function buscar(){
        return view('libros.busqueda');
    }

    public function search(Request $request){
        $libros = Libro::Search($request->busqueda)->orderBy('id');
        
        return view('libros.listaLibro', compact('libros'));
    }
}
