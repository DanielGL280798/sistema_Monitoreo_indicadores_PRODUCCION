@extends('app')
@section('content')

@unless(empty( $posts))
@endif

<br><br><br><br>
      <table id="example"  class="table table-bordered table-striped table-hover">
          <tr>
            <th>ID</th>
            <th>Nombre del Boton</th>
            <th>Encendido o Apagado</th>

            <th></th>

            </tr>
            @foreach ($permiso as $per)
          <tr>
           <td>{{$per -> id}}</td>
           <td>{{$per-> nombre_boton}}</td>

           <th>{{$per-> nombre}}</th>
           <th>


           <button type="button" class="btn btn-primary" data-toggle="modal"  data-target="#editper{{ $per ->id }}">
              <i class="zmdi zmdi-comment-edit " title="Actualizar Registro"></i>
            </button>
            </th>
         </tr>

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

         @include('ModalPermiso')
         @endforeach</table>
          {{ $permiso->links()}}
        @endsection
