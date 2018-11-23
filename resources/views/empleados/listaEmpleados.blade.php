@extends('layout.app')

@section('title', "Listado de Empleados")

@section('header', "Listado")

@section('navbar')
<div class="mx-auto" style="width: auto;">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="{{ route('registrarEmpleados') }}">Registro</a>
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
            @foreach($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->id }}</td>
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->apellido}}</td>
                    <td>{{ $empleado->cedula }}</td>
                    <td>{{ $empleado->correo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection