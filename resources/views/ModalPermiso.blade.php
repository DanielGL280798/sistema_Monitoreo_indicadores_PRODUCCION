<div class="modal fade" id="editper{{ $per ->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg ">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #09ad19 !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Información
        </h6>


        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="{{ route('updateper', $per ->id) }}"  enctype="multipart/form-data">
          @method('PUT')
          @csrf
          @if(\Session::has('actualizo'))
        	<script type="text/javascript">
        		Swal.fire({
        			position: 'center',
        			icon: 'success',
        			title: 'Se actualizo correctamente',
        			showConfirmButton: true,
        		})
            @endif
        	</script><br>
          <div class="modal-body" id="cont_modal">

              <div class="form-group">
                <div class="form-row container">

          </div>

              <div class="form-row container">


                <div class="form-group col-md-12">
                    <label for="fk_direcciones_id" class="text-dark etiquetas">permiso:</label>

                    <select name="fk_autorizacion_id" class="selectAltura	form-select bg-white p-1 border border-dark" id="fk_autorizacion_id" name="fk_autorizacion_id" value="{{ $per -> nombre }}">
                      <option value=" ">Seleccione</option>
                      @foreach ($autorizacion as $id =>$nombre)
                      <option value="{{$id}}" @if ($nombre === $per ->nombre) selected @endif
                        >{{$nombre}}</option>

                      @endforeach
                      </select>
                </div>



                <div class="modal-footer">

                  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
           </form>
        </div>
      </div>
      </div>
      </div>
    </div>
    </div>
