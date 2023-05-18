<div class="modal fade" id="editperiocidad{{ $id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #09ad19 !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Información
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="{{ route('modificarperiocidad', $id) }}">
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
        	</script>


            <div class="modal-body" id="cont_modal">

                <div class="form-group">

                <div class="form-group col-md-6">
                <label for="nombre" class="text-dark etiquetas">Nombre de la Periodicidad:</label>
                <input type="text" class="form-control bg-white p-3 border border-dark" id="nombre" name="nombre" value="{{ $nombre }}">
                        @error('nombre')
                        <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                        @enderror
                      </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>
