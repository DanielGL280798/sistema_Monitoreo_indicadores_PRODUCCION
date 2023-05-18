@extends('app')
@section('content')

@unless(empty( $posts))
@endif

<br><br><br><br>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
 <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('css/cargando.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('css/maquinawrite.css') }}">


<div class="container align-items-center">

      <div class="card-body">
  <div class="card">
      <H4 class="text-center">Datos Monitoreo:</H4><br><br><br>

      <nav class="navbar navbar-light float-right">

          <form class="form-inline">

  <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">

     <button class="btn btn-outline-success my-4 my-sm-0" type="submit">Buscar</button>
</form>

</nav>

<div class="col-sm-15">
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
                 <div class="col-lg-12 col-md-4 col-sm-12 col-xs-12">
                   <div class="body">
                       <div class="row clearfix">
                         <div class="col-sm-12">
                               <div class="row">
                                 <div class="col-md-12 p-6">

                                 <div class="table-responsive">
                                     <table class="table table-bordered table-striped table-hover">
                                         <tr>
                                           <th>ID</th>
                                            <th>Direccion</th>
                                            <th>Secretaria</th>
                                             <th>In. del PMD</th>
                                             <th>Eje estrategico</th>
                                             <th>Estrategias</th>
                                             <th>L. de accion</th>
                                             <th>Estrategia Transversal</th>
                                             <th>Nombre del indicador</th>
                                             <th>Descripcion del indicador</th>
                                             <th>Tipo de indicador</th>
                                             <th>Base de calculo</th>

                                             <th>T. de evidencia</th>
                                             <th>Nivel de indicador</th>
                                             <th>liena Base</th>
                                             <th>Descripcion liena Base</th>
                                             <th>Metas</th>
                                             <th>Descripcion Metas</th>
                                             <th>Notas</th>
                                             <th>D.de las acciones programadas</th>
                                             <th>D.de las acciones realizadas</th>
                                             <th>D.del beneficio obetenido</th>
                                             <th>Num.y tipo de poblacion beneficiada</th>
                                             <th>Acción</th>
                                         </tr>
                                         @foreach ($monitoreocon as $mo)
                                                 <tr >

                                                   <td>{{$mo -> id}}</td>
                                                   <td>{{$mo -> direcciones}}</td>
                                                   <td>{{$mo -> nombreSecre}}</td>
                                                   <td>{{$mo -> nombreIndi}}</td>
                                                     <td>{{$mo -> nombreEjes}}</td>
                                                     <td>{{$mo -> nombreEstra}}</td>
                                                     <td>{{$mo -> nombreLine}}</td>
                                                     <td>{{$mo -> nombreEs}}</td>
                                                     <td>{{$mo -> nom_indicador}}</td>
                                                     <td>{{$mo -> des_indicador}}</td>
                                                     <td>{{$mo -> nombreTipo}}</td>
                                                     <td>{{$mo -> base_calculo}}</td>

                                                     <td>{{$mo -> tipo_evidencia}}</td>
                                                     <td>{{$mo -> nombreTipo2}}</td>
                                                     <td>{{$mo -> linea_base}}</td>
                                                     <td>{{$mo -> descripcion_linea_base}}</td>
                                                     <td>{{$mo -> metas}}</td>
                                                     <td>{{$mo -> descripcion_meta}}</td>
                                                     <td>{{$mo -> nota}}</td>
                                                     <td>{{$mo -> desc_acc_rea}}</td>
                                                     <td>{{$mo -> desc_acc_rea_peri}}</td>
                                                     <td>{{$mo -> desc_bene_obte}}</td>
                                                     <td>{{$mo -> nu_tipo_pob_benefi}}</td>
                                                     <td >


                                                        @foreach ($permisos as $id => $fk_autorizacion_id)
                                                          @if($fk_autorizacion_id == 1)
                                                            <button type="button" class="btn btn-danger" onclick="eliminar('{{$mo -> id}}')">
                                                            <i class="zmdi zmdi-delete zmdi-hc-lg" title="Eliminar Registro" ></i>
                                                            </button>
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#moni{{ $mo -> id }}">
                                                            <i class="zmdi zmdi-comment-edit zmdi-hc-lg" title="Actualizar Registro"></i>
                                                            </button>
                                                        @elseif($fk_autorizacion_id == 2)

                                                        @endif
                                                      @endforeach

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
                                                  var url = '{{ route("deletemonitoreo", ":id") }}';
                                                 url = url.replace(':id', id);
                                                 window.location.href=url;
                                                    Swal.fire(
                                                      'Eliminado!',
                                                      'Ha sido eliminado.',
                                                      'success'
                                                    )
                                                  }
                                                  })
                                                 }


                                                 </script>
                                               <!--Ventana Modal para la Alerta de Eliminar--->
                                                @include('Modalmoni')
                                               @endforeach
                                     </table>

                                 </div>
                                 <div class="form-group col-md-12">

                                 </div>
 {{ $monitoreocon->links()}}


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
</div></div>




@endsection
