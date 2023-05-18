@extends('app')
@section('content')

@unless(empty( $posts))
@endif

<br><br><br><br>



<div class="container align-items-center">

  <div class="card">
      <div class="card-body">
  <div class="card">
      <H4 class="text-center">3º Trimestre Carga de Avance:</H4><br><br><br>

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


                 <div class="container">


                 <div class="row clearfix">
                 <div class="col-lg-12 col-md-1 col-sm-12 col-xs-12">
                   <div class="body">
                       <div class="row clearfix">
                         <div class="col-sm-12">
                               <div class="row">
                                 <div class="col-md-12 p-2">

                                 <div class="table-responsive">
                                     <table id="example"  class="table table-bordered table-striped table-hover">
                                         <tr>
                                           <th>ID</th>
                                           <th>Nombre indicador</th>
                                           <th>Meta Actual</th>
                                            <th>Meta Realizada</th>

                                            <th>Evidencia</th>

                                            <th>Porcentaje de Avance</th>
                                             <th>Logros/Avance</th>
                                             <th>Acciones</th>
                                             <th>Acciones a realizadar</th>
                                             <th>Obcervaciones</th>
                                             <th>Reportes</th>
                                             <th>Acción</th>
                                           </tr>
                                           @foreach ($carga_avance as $ma)
                                                   <tr >
                                          <td>{{$ma -> id}}</td>
                                          <td>{{$ma-> nom_indicador}}</td>
                                          <td>{{$ma-> metas}}</td>
                                          <td>{{$ma -> meta}}</td>

                                          <td><a href="{{route('cargaavances',$ma->id)}}" class="btn btn-primary " target="_blank">Ver PDF</a></td>

                                          <td

                                          @if((int)$ma -> porcentaje_avance >=0 && (int)$ma -> porcentaje_avance <= 50)
                                            style="background:red;"

                                            @elseif ((int)$ma -> porcentaje_avance >=51 && (int)$ma -> porcentaje_avance <= 85)
                                            style="background:yellow;"
                                            @elseif ((int)$ma -> porcentaje_avance >=86)
                                            style="background:green;"
                                            @elseif ((int)$ma -> porcentaje_avance >= 100)
                                            style="background:green;"

                                          @endif>
                                            {{$ma -> porcentaje_avance}}</td>

                                          <td>{{$ma -> Logros_beneficio}}</td>
                                          <td>{{$ma -> acciones}}</td>
                                          <td>{{$ma -> acciones_realizar}}</td>
                                          <td>{{$ma -> observaciones}}</td>



                                          <td><a href="{{route('Reporte2',$ma->id)}}" class="btn btn-outline-primary " target="_blank"><i class="zmdi zmdi-assignment-o mdc-text-green"> 3° trimestre </i>  </a>
                                          </td>
                                            <td >
                                              @foreach ($permisos as $id => $fk_autorizacion_id)
                                                @if($fk_autorizacion_id == 1)
                                        <button type="button" class="btn btn-danger" onclick="eliminar('{{$ma -> id}}') ">
                                       <i class="zmdi zmdi-delete zmdi-hc-lg" title="Eliminar Registro" ></i>
                                   </button>

                                   <button type="button" class="btn btn-primary" data-toggle="modal"  data-target="#editcarga{{ $ma ->id }}">
                                      <i class="zmdi zmdi-comment-edit " title="Actualizar Registro"></i>
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
                                                  var url = '{{ route("deleteavance", ":id") }}';
                                                 url = url.replace(':id', id);
                                                 window.location.href=url;
                                                    Swal.fire(
                                                      'Eliminado!',
                                                      'Sus datos monitoreo  ha sido eliminado.',
                                                      'success'
                                                    )
                                                  }
                                                  })
                                                 }



                                                 </script>

                                                 <script>
                                                     $(document).ready(function(){
                                                         var tabla = $("#example").DataTable({
                                                                "createdRow":function(row,data,index){
                                                                    //pintar una celda
                                                                    if(data[5] >= 25){
                                                                        /* $('td', row).eq(5).css({
                                                                            'background-color':'#ff5252',
                                                                            'color':'white',
                                                                        }); */

                                                                     //pintar una fila
                                                                     $('td', row).css({
                                                                            'background-color':'#ff5252',
                                                                            'color':'white',
                                                                            'border-style':'solid',
                                                                            'border-color':'#bdbdbd'
                                                                        });
                                                                    }
                                                                  },
                    "drawCallback":function(){
                          //alert("La tabla se está recargando");
                          var api = this.api();
                          $(api.column(5).footer()).html(
                              'Total: '+api.column(5, {page:'current'}).data().sum()
                          )
                    }
            });

            //1era forma para sum()
            //var tot = tabla.column(5).data().sum();
            //$("#total").text(tot);
        });
        </script>

@include('ModalCarga')
@endforeach
                                     </table>

                                 </div>
 {{ $carga_avance->links()}}

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
