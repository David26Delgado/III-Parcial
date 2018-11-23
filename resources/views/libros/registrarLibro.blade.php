@extends('layout.app')

@section('title', "Registrar Libros")

@section('header', "Registro")

@section('navbar')
<div class="mx-auto" style="width: auto;">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="">Registro</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('listaLibros') }}">Lista</a>
            </li>
						<li class="nav-item">
            <a class="nav-link" href="{{ route('buscarLibros') }}">Búsqueda</a>
            </li>
        </ul>
    </div>
</div>
@endsection

@section('content')
<div class="container">
	<p>Rellene el formulario para añadir un nuevo libro:</p>
	<form action="{{ route('registrarBD') }}" method="POST">
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
				<span class="input-group-text" id="inputGroup-sizing-default">Editorial:</span>
			</div>
			<input type="text" name="editorial" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
		</div>

						<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" id="inputGroup-sizing-default">Año:</span>
			</div>
			<input type="number" name="año" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
		</div>

						<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" id="inputGroup-sizing-default">Ubicación en la Biblioteca:</span>
			</div>
			<input type="text" name="ubicacion" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
		</div>

						<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" id="inputGroup-sizing-default">Autor:</span>
			</div>
			<input type="text" name="autor" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
		</div>

						<div class="input-group mb-3">
			<div class="input-group-prepend">
				<label class="input-group-text" for="tipo">Tipo:</label>
			</div>
			<select class="custom-select" name="tipo" id="tipo">
								<option value="1">Normal</option>
								<option value="0">Reserva</option>
			</select>
		</div>

						<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" id="inputGroup-sizing-default">Área de conocimiento:</span>
			</div>
			<input type="text" name="area" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
		</div>

						<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" id="inputGroup-sizing-default">Días de préstamo:</span>
			</div>
			<input type="number" name="dias" min=0 class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
		</div>

		<button type="submit" class="btn btn-primary">Enviar</button>
		</fieldset>
	</form>
</div>
@endsection