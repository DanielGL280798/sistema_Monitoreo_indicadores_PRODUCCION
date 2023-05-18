<div class="modal fade"  id="pdf{{$mo->id}}"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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


            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                  <div class="form-group col-md-12">
                  <label for="nom_indicador" class="text-dark etiquetas">Nombre del indicador:</label>
                  <input type="text" class="form-control bg-white p-3 border border-dark" id="nom_indicador" name="nom_indicador" value="{{ $r-> nom_indicador }}">
                          @error('nom_indicador')
                          <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                          @enderror
                        </div>


<div class="form-group col-md-12">
    <label for="des_indicador" class="text-dark etiquetas">Descripcion del indicador:</label>
    <input type="text" class="form-control bg-white p-3 border border-dark" id="des_indicador" name="des_indicador" value="{{$mo -> des_indicador }}">
            @error('des_indicador')
            <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group col-md-6">
          <label for="fk_periodicidad_id" class="text-dark etiquetas">Periodicidad:</label>
          <select name="fk_periodicidad_id" class="selectAltura	form-select bg-white p-1 border border-dark" id="fk_periodicidad_id" name="fk_periodicidad_id" value="{{ $ma -> nombrePeri }}">
          <option value=" ">Seleccione</option>
          @foreach ($periodicidad as $id =>$nombre)
          <option value="{{$id}}"@if ($nombre  === $ma-> nombrePeri) selected @endif>{{$nombre}}</option>
          @endforeach
          </select>
          @error('fk_periodicidad_id')
          <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
          @enderror
              </div>
              <div class="form-group col-md-6">
                <label for="porcentaje_avance" class="text-dark etiquetas">Porcentaje de Avance:</label>
                <input type="text" class="form-control bg-white p-3 border border-dark" id="porcentaje_avance" name="porcentaje_avance" value="{{ $ma->porcentaje_avance}}">
                        @error('porcentaje_avance')
                        <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                        @enderror
                      </div>

          <div class="form-group col-md-6">
            <label for="Logros_beneficio" class="text-dark etiquetas">logro/beneficio:</label>
            <input type="text" class="form-control bg-white p-3 border border-dark" id="Logros_beneficio" name="Logros_beneficio" value="{{ $ma -> Logros_beneficio }}">
                    @error('Logros_beneficio')
                    <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group col-md-6">
                    <label for="acciones" class="text-dark etiquetas">Acciones:</label>

                    <input type="text" class="form-control bg-white p-3 border border-dark" id="acciones" name="acciones" value="{{ $ma -> acciones }}">
                            @error('acciones')
                            <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                            @enderror
                          </div>
          <div class="form-group col-md-6">
            <label for="acciones_realizar" class="text-dark etiquetas">Acciones por realizadar:</label>
            <input type="text" class="form-control bg-white p-3 border border-dark" id="acciones_realizar" name="acciones_realizar" value="{{ $ma -> acciones_realizar }}">
                    @error('acciones_realizar')
                    <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                    @enderror
                  </div>


                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                          <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        </div></from>
    </div>
  </div>
</div>
</div>
</div>
