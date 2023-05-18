@extends('app')
@section('content')

@unless(empty( $posts))

	@endif
<br><br><br><br>
<div class="container align-items-center">
	@if(\Session::has('guardado'))
	<script type="text/javascript">
		Swal.fire({
			position: 'center',
			icon: 'success',
			title: 'Datos Guardados Exitosamente',
			showConfirmButton: true,
		})
		@endif
		</script>
  <div class="card">
      <div class="card-body">
  <div class="card">
    <H4 class="text-center"> Registrar Periodicidad:</H4><br><br><br>
    <form method="post" action="{{route('catalogoperiodicidad')}}" id="formulario">
      @csrf
      <div class="card-body">
  <div class="card">
    <div class="form-row container">
  <div class="form-group col-md-6">
  <label for="nombre" class="text-dark etiquetas">Nombre del Periodo:</label>
  <input type="text" class="form-control bg-white p-3 border border-dark" id="nombre" name="nombre" value="{{ old('nombre') }}">
          @error('nombre')
          <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
          @enderror
        </div>
              </div>
                <div class="form-row container">
            <div class="form-group col-md-6">
					<button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Enviar</button>

		 </div>	</form>
		 <div class="col-sm-9">
									<div class="row">
										<div class="col-md-12 p-2">

											<style>
															table tr th{
																	background:rgba(0, 0, 0, .6);
																	color: azure;
															}
															h3{
																	color:crimson;
																	margin-top: 100px;
															}
															a:hover{
																	cursor: pointer;
																	color: #333 !important;
															}
															.zmdi:hover{
																color: green;
																cursor: pointer;
															}
														</style>
											</head>
											<body>

											<div class="container">



											<div class="row clearfix">
											<div class="col-lg-12 col-md-1 col-sm-12 col-xs-12">
												<div class="body">
														<div class="row clearfix">
															<div class="col-sm-12">
																		<div class="row">
																			<div class="col-md-12 p-2">

																			<div class="table-responsive">
																					<table class="table table-bordered table-striped table-hover">
																							<tr>
																								<th>ID</th>
																									<th>Nombre de la Periodicidad</th>
																									 <th>Acción</th>
																							</tr>
																						@foreach ($periodicidad as  $id =>$nombre)
																											<tr >
																												 <td>{{$id}}</td>
																													<td>{{$nombre}}</td>

																													<td >
																														<button type="button" class="btn btn-danger" onclick="eliminar('{{$id}}')">
																						<i class="zmdi zmdi-delete zmdi-hc-lg" title="Eliminar Registro"></i>
																				</button>

																															<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editperiocidad{{ $id }}">
																																<i class="zmdi zmdi-comment-edit zmdi-hc-lg" title="Actualizar Registro"></i>
																															</button>
																													</td>
																											</tr>

																											<script type="text/javascript">
																											function eliminar (id){
																											 console.log(id);

																											 Swal.fire({
																											 title: 'Quieres eliminar este campo?',
																											 text: "¡No podrás revertir esto!",
																											 icon: 'warning',
																											 showCancelButton: true,
																											 confirmButtonColor: '#3085d6',
																											 cancelButtonColor: '#d33',
																											 confirmButtonText: 'Si,eliminar!'
																											 }).then((result) => {
																											 if (result.isConfirmed) {
																											 var url = '{{ route("deleteperiocidad", ":id") }}';
																											url = url.replace(':id', id);
																											window.location.href=url;
																												 Swal.fire(
																													 'Eliminado!',
																													 'Su Periodicidad  ha sido eliminado.',
																													 'success'
																												 )
																											 }
																											 })
																											}


																											</script>
																									<!--Ventana Modal para Actualizar--->
																										@include('Modalperiocidad')
																										<!--Ventana Modal para la Alerta de Eliminar--->

																											@endforeach
																					</table>

																			</div>



																		</div>
																</div>
																</div>
														</div>
												</div>
											</div>



											</div>
		</div>  </div>
		</div>
		</div>
		</div>
		</div>




		@endsection
