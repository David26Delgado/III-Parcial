@extends('layout.app')

@section('title', "Listado de Estudiantes")

@section('header', "Listado")

@section('navbar')
<div class="mx-auto" style="width: auto;">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="{{ route('registrarEstudiantes') }}">Registro</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="">Lista</a>
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
            <th>Apellido</th>
            <th>Cédula</th>
            <th>Correo</th>
        </thead>
        <tbody>
            @foreach($estudiantes as $estudiante)
                <tr>
                    <td>{{ $estudiante->id }}</td>
                    <td>{{ $estudiante->nombre }}</td>
                    <td>{{ $estudiante->apellido}}</td>
                    <td>{{ $estudiante->cedula }}</td>
                    <td>{{ $estudiante->correo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection