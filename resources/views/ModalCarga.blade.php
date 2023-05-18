<div class="modal fade" id="editcarga{{ $ma ->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

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
      <form method="POST" action="{{ route('updatecarga', $ma ->id) }}"  enctype="multipart/form-data">
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
          <H6 class="text-center"><center><strong>PLAN MUNICIPAL DE DESARROLLO DE TULANCINGO DE BRAVO 2020-2024 publicado:</strong></center></H6>
          </div>

              <div class="form-row container">
                <div class="form-group col-md-6">
                    <label for="fk_nom_id" class="text-dark etiquetas">Nombre del Indicador:</label>

                    <select name="fk_nom_id" class="selectAltura	form-select bg-white p-1 border border-dark" id="fk_nom_id" name="fk_nom_id" value="{{ $ma-> nom_indicador }}">
                    <option value=" ">Seleccione</option>
                    @foreach ($monitoreo as $id =>$nom_indicador)
                    <option value="{{$id}}"@if ($nom_indicador  === $ma-> nom_indicador) selected @endif
                      >{{$nom_indicador}}</option>
                    @endforeach
                    </select>
                    @error('fk_nom_id')
                    <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="meta" class="text-dark etiquetas">Meta Realizada:</label>

                    <input type="text" class="form-control bg-white p-3 border border-dark" id="meta" name="meta" value="{{ $ma -> meta }}">
                            @error('meta')
                            <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                            @enderror
                          </div>

                <div class="form-group col-md-6">

                  <label for="evidencia" class="text-dark etiquetas">Evidencia :</label>
                  <input accept="application/pdf" type="file" name="evidencia" id="evidencia" onchange="">
                  @error('evidencia')
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
                        <div class="form-group col-md-6">
                          <label for="observaciones" class="text-dark etiquetas">Observaciones:</label>
                          <input type="text" class="form-control bg-white p-3 border border-dark" id="observaciones" name="observaciones" value="{{ $ma -> observaciones }}">
                                  @error('observaciones')
                                  <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                                  @enderror
                                </div>
<input type="hidden" class="form-control bg-white p-3 border border-dark" id="fk_users_id" name="fk_users_id" value="{{Auth::user()->id}}">

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
           </form>
        </div>
      </div>
      </div>
      </div>
    </div>
    </div>
