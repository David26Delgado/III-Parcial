@extends('layout.app')

@section('title', "Registrar Préstamos")

@section('header', "Registro")

@section('navbar')
<div class="mx-auto" style="width: auto;">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="">Registro</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('listaPrestamos') }}">Lista</a>
            </li>
        </ul>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    	<p>Rellene el formulario para registrar un nuevo prestamo:</p>
    	<form action="{{ route('registrarPBD') }}" method="POST">
    		<fieldset class="form-group">
            {{csrf_field()}}
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <label class="input-group-text" for="libro">Libro:</label>
				  </div>
				  <select class="custom-select" name="libro" id="libro">
					@forelse($libros as $key)
						<option value="{{ $key->nombre }}">{{ $key->nombre }}</option>
					@empty
						<option value="">Ninguno</option>
					@endforelse
				  </select>
				</div>

                <div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <label class="input-group-text" for="estudiante">Estudiante:</label>
				  </div>
				  <select class="custom-select" name="estudiante" id="estudiante">
					@forelse($estudiantes as $key)
						<option value="{{ $key->nombre }}">{{ $key->nombre }}</option>
					@empty
						<option value="">Ninguno</option>
					@endforelse
				  </select>
				</div>

                <div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <label class="input-group-text" for="empleado">Empleado encargado del préstamo:</label>
				  </div>
				  <select class="custom-select" name="empleado" id="empleado">
					@forelse($empleados as $key)
						<option value="{{ $key->nombre }}">{{ $key->nombre }}</option>
					@empty
						<option value="">Ninguno</option>
					@endforelse
				  </select>
				</div>

                <div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">Fecha de préstamo:</span>
				  </div>
				  <input type="date" name="prestamo" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
				</div>

                <div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">Fecha de entrega:</span>
				  </div>
				  <input type="date" name="entrega" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
				</div>

				<button type="submit" class="btn btn-primary">Enviar</button>
    		</fieldset>
    	</form>
    </div>
@endsection