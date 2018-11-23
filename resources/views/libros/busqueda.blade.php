@extends('layout.app')

@section('title', "Búsqueda")

@section('header', "Búsqueda")

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
            <li class="nav-item">
            <a class="nav-link" href="">Búsqueda</a>
            </li>
        </ul>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <p>Rellene el formulario para hacer la búsqueda respectiva:</p>
    <form action="{{ route('search') }}" method="POST">
        <fieldset class="form-group">
        {{csrf_field()}}
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <label class="input-group-text" for="Busqueda">Busqueda:</label>
                </div>
                <select class="custom-select" name="busqueda" id="Busqueda">
                    <option value="nombre">Nombre</option>
                    <option value="area">Area</option>
                    <option value="autor">Autor</option>
                    <optgroup label="Tipo">
						<option value="1">Normal</option>
						<option value="0">Reserva</option>
					</optgroup>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Búsqueda:</span>
                </div>
                <input type="text" name="texto" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
		    </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </fieldset>
    </form>
</div>
@endsection