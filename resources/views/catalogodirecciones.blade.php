@extends('app')
@section('content')

@unless(empty( $posts))
@endif
@inject('secretarias', 'App\Http\Controllers\catalogosecretarias')
<br><br><br><br>

  <div class="card">
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
      <div class="card-body">
  <div class="card">
    <H4 class="text-center"> Registrar Direcciones</H4><br><br><br>
		<form method="post" action="{{route('catalogodirecciones')}}" id="formulario">
      @csrf

  <div class="form-group col-md-4">  </div></div>
  <div class="card-body">
  <div class="card">
    <div class="form-row container">
      <div class="form-group col-md-12">
         </div>
                <div class="form-group col-md-6">
                    <label for="fk_secretarias_id" class="text-dark etiquetas">Nombre de la secretaria:</label>
                    <select name="fk_secretarias_id" class="selectAltura	form-select bg-white p-1 border border-dark" id="fk_secretarias_id" name="fk_secretarias_id" value="{{ old('fk_secretarias_id') }}">
                		<option value=" ">Seleccione</option>
                		@foreach ($secretaria as $id =>$nombre)
                    <option value="{{$id}}">{{$nombre}}</option>
                    @endforeach
                		</select>
                    @error('fk_secretarias_id')
                    <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                    @enderror
                </div>
  <div class="form-group col-md-6">
  <label for="direcciones" class="text-dark etiquetas">Nombre de la Direccion:</label>
  <input type="text" class="form-control bg-white p-3 border border-dark" id="direcciones" name="direcciones" value="{{ old('direcciones') }}">
          @error('direcciones')
          <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group col-md-6">
           </div>
              </div>

                <div class="form-row container">
            <div class="form-group col-md-6">
					<button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Enviar</button>
          <div class="form-group col-md-6">
             </div>
             <div class="form-group col-md-6">
                </div>
        </div>

      	</form>

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
                                                 <th>Nombre de la direccion</th>
																								 <th>Nombre de la secretaria</th>
                                                  <th>Acción</th>
                                             </tr>

																						@foreach ($direcciones as $mo)
                                                     <tr >
                                                        <td>{{$mo ->id}}</td>
                                                         <td>{{$mo ->direcciones}} </td>
																												 <td>{{$mo ->secretarias}}</td>
                                                         <td >
                                                           <button type="button" class="btn btn-danger" onclick="eliminar('{{$mo ->id}}')">
                                           <i class="zmdi zmdi-delete zmdi-hc-lg" title="Eliminar Registro"></i>
                                       </button>

                                                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editdirecciones{{ $mo ->id }}" >
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
                                                      var url = '{{ route("deletedireciones", ":id") }}';
                                                     url = url.replace(':id', id);
                                                     window.location.href=url;
                                                        Swal.fire(
                                                          'Eliminado!',
                                                          'Su Direccion  ha sido eliminado.',
                                                          'success'
                                                        )
                                                      }
                                                      })
                                                     }


                                                     </script>

                                                 <!--Ventana Modal para Actualizar--->
                                                    @include('Modaldireccion')
                                                   <!--Ventana Modal para la Alerta de Eliminar--->

 																								 @endforeach

                                         </table>

                                     </div>
                                     {{ $direcciones->links()}}


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
