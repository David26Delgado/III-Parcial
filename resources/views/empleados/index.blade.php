@extends('layout.app')

@section('title', "Empleados")

@section('header', "Empleados Dashboard")

@section('navbar')
<div class="mx-auto" style="width: auto;">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="{{ route('registrarEmpleados') }}">Registro</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('listaEmpleados') }}">Lista</a>
            </li>
        </ul>
    </div>
</div>
@endsection

@section('content')
    Apartado de Empleados.
@endsection