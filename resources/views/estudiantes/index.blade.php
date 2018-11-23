@extends('layout.app')

@section('title', "Estudiantes")

@section('header', "Estudiantes Dashboard")

@section('navbar')
<div class="mx-auto" style="width: auto;">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="{{ route('registrarEstudiantes') }}">Registro</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('listaEstudiantes') }}">Lista</a>
            </li>
        </ul>
    </div>
</div>
@endsection

@section('content')
    Apartado de Estudiantes.
@endsection