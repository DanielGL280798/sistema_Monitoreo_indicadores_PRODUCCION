@extends('main')

@section('content')

@unless(empty( $posts))
@endif
<!-- <div class="container align-items-center">
<div class="card">
  <div class="form-row">
					<div class="form-group col-md-4">
						<label for="nombre" class="text-dark etiquetas">Nombre:</label>
						<input type="text" class="form-control bg-white p-3 border border-dark" id="nombre" name="nombre" value="{{ old('nombre') }}">
						@error('nombre')
						<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group col-md-4">
						<label for="apellido_paterno" class="text-dark etiquetas">Apellido paterno:</label>
						<input type="text" class="form-control bg-white p-3 border border-dark" id="apellido_paterno" name="apellido_paterno" value="{{ old('apellido_paterno') }}">
						@error('apellido_paterno')
						<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group col-md-4">
						<label for="apellido_materno" class="text-dark etiquetas">Apellido materno:</label>
						<input type="text" class="form-control bg-white p-3 border border-dark" id="apellido_materno" name="apellido_materno" value="{{ old('apellido_materno') }}">
						@error('apellido_materno')
						<div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
						@enderror
					</div>
				</div>
</div>
</div> -->
@endsection
