@extends('layout.app')

@section('title', "Libros")

@section('header', "Libros Dashboard")

@section('navbar')
<div class="mx-auto" style="width: auto;">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="{{ route('registrarLibros') }}">Registro</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('listaLibros') }}">Lista</a>
            </li>
        </ul>
    </div>
</div>
@endsection

@section('content')
    Apartado de Libros.

@endsection