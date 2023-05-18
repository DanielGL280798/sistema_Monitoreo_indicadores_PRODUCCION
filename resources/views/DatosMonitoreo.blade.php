<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/cargando.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/maquinawrite.css') }}">

  <div class="card">
      <div class="card-body">
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
                                              <th>Nombre del Nivel de Indicador</th>
                                               <th>Acción</th>
                                          </tr>
                                        @foreach ($tipo_indicador2 as  $id =>$nombre)
                                                  <tr >
                                                     <td>{{$id}}</td>
                                                      <td>{{$nombre}}</td>

                                                      <td >
                                                        <button type="button" class="btn btn-danger" onclick="eliminar('{{$id}}')">
                                        <i class="zmdi zmdi-delete zmdi-hc-lg" title="Eliminar Registro"></i>
                                    </button>

                                                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edittipo2{{ $id }}">
                                                            <i class="zmdi zmdi-refresh-sync zmdi-hc-lg" title="Actualizar Registro"></i>
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
                                                   var url = '{{ route("deletetipoindicador2", ":id") }}';
                                                  url = url.replace(':id', id);
                                                  window.location.href=url;
                                                     Swal.fire(
                                                       'Eliminado!',
                                                       'Su  Nivel de indicador  ha sido eliminado.',
                                                       'success'
                                                     )
                                                   }
                                                   })
                                                  }


                                                  </script>
                                              <!--Ventana Modal para Actualizar--->
                                                @include('ModalTipoindicador2')
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
