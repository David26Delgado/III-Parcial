@extends('layout.app')

@section('title', "Listado de Prestamos")

@section('header', "Listado")

@section('navbar')
<div class="mx-auto" style="width: auto;">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="{{ route('registrarPrestamos') }}">Registro</a>
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
            <th>Estudiante</th>
            <th>Empleado</th>
            <th>Préstamo</th>
            <th>Entrega</th>
        </thead>
        <tbody>
            @foreach($pretamos as $prestamo)
                <tr>
                    <td>{{ $prestamo->id }}</td>
                    <td>{{ $prestamo->nombre }}</td>
                    <td>{{ $prestamo->apellido}}</td>
                    <td>{{ $prestamo->cedula }}</td>
                    <td>{{ $prestamo->correo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection