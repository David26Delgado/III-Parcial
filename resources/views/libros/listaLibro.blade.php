@extends('layout.app')

@section('title', "Listado de Libros")

@section('header', "Listado")

@section('navbar')
<div class="mx-auto" style="width: auto;">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="{{ route('registrarLibros') }}">Registro</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="">Lista</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('buscarLibros') }}">Búsqueda</a>
            </li>
        </ul>
    </div>
</div>
@endsection

@section('content')

    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Editorial</th>
            <th>Año</th>
            <th>Ubicación</th>
            <th>Autor</th>
            <th>Tipo</th>
            <th>Área de Conocimiento</th>
            <th>Días de Préstamo</th>
        </thead>
        <tbody>
            @foreach($libros as $libro)
                <tr>
                    <td>{{ $libro->id }}</td>
                    <td>{{ $libro->nombre }}</td>
                    <td>{{ $libro->editorial}}</td>
                    <td>{{ $libro->año }}</td>
                    <td>{{ $libro->ubicacion }}</td>
                    <td>{{ $libro->autor }}</td>
                    <td>{{ $libro->tipo }}</td>
                    <td>{{ $libro->area }}</td>
                    <td>{{ $libro->dias_prestamo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection