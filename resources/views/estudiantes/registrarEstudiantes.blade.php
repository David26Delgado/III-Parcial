@extends('layout.app')

@section('title', "Registrar Estudiantes")

@section('header', "Registro")

@section('navbar')
<div class="mx-auto" style="width: auto;">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="">Registro</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('listaEstudiantes') }}">Lista</a>
            </li>
        </ul>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    	<p>Rellene el formulario para registrar un nuevo estudiante:</p>
    	<form action="{{ route('registrarEBD') }}" method="POST">
    		{{csrf_field()}} 
    		<fieldset class="form-group">
            {{csrf_field()}}
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">Nombre:</span>
				  </div>
				  <input type="text" name="nombre" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
				</div>

                <div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">Apellido:</span>
				  </div>
				  <input type="text" name="apellido" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
				</div>

                <div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">Cédula:</span>
				  </div>
				  <input type="number" name="cedula" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
				</div>

                <div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">Correo:</span>
				  </div>
				  <input type="email" name="correo" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
				</div>

				<button type="submit" class="btn btn-primary">Enviar</button>
    		</fieldset>
    	</form>
    </div>
@endsection