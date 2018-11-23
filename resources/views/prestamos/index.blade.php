@extends('layout.app')

@section('title', "Préstamos")

@section('header', "Préstamos Dashboard")

@section('navbar')
<div class="mx-auto" style="width: auto;">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="{{ route('registrarPrestamos') }}">Registro</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('listaPrestamos') }}">Lista</a>
            </li>
        </ul>
    </div>
</div>
@endsection

@section('content')
    Apartado de Préstamos.
@endsection