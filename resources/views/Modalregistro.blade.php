

<div class="modal fade"  id="editmoniss{{ $mo->id}}"    tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

      <form method="POST" action="{{route('editmonitoreos',$mo->id)}}" >
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
                  <div class="form-row container">
                    <div class="form-group col-md-6">
                        <label for="fk_direcciones_id" class="text-dark etiquetas">Direccion:</label>

                        <select name="fk_direcciones_id" class="selectAltura	form-select bg-white p-1 border border-dark" id="fk_direcciones_id" name="fk_direcciones_id" value="{{ $mo -> direcciones }}">
                          <option value=" ">Seleccione</option>
                          @foreach ($direcciones as $id =>$direcciones)
                          <option value="{{$id}}" @if ($direcciones === $mo ->direcciones) selected @endif
                            >{{$direcciones}}</option>

                          @endforeach
                          </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="fk_secretarias_id" class="text-dark etiquetas">Secretaria:</label>

                        <select name="fk_secretarias_id" class="selectAltura	form-select bg-white p-1 border border-dark" id="fk_secretarias_id" name="fk_secretarias_id" value="{{ $mo -> nombreSecre}}">
                        <option value=""> Seleccione</option>
                        @foreach ($secretarias as $id =>$nombre)
                        <option value="{{$id}}" @if ($nombre === $mo ->nombreSecre) selected @endif>{{$nombre}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="fk_indicador_id" class="text-dark etiquetas">Indicador del PMD al que se alinea:</label>
                        <select name="fk_indicador_id" class="selectAltura	form-select bg-white p-1 border border-dark" id="fk_indicador_id" name="fk_indicador_id" value="{{ $mo -> nombreIndi }}">
                        <option value="">Seleccione</option>
                        @foreach ($indicador as $id =>$nombre)
                        <option value="{{$id}}" @if ($nombre === $mo ->nombreIndi) selected @endif>{{$nombre}}</option>
                        @endforeach
                        </select>
                    </div>

                            <div class="form-group col-md-6">
                                <label for="fk_ejes_id" class="text-dark etiquetas"><br>Eje estrategico:</label>
                                <select name="fk_ejes_id" class="selectAltura	form-select bg-white p-1 border border-dark" id="fk_ejes_id" name="fk_ejes_id" value="{{ $mo -> nombreEjes }}">
                                <option value="">Seleccione</option>
                                @foreach ($ejes as $id =>$nombre)
                                <option value="{{$id}}"@if ($nombre === $mo ->nombreEjes) selected @endif>{{$nombre}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="fk_estrategias_id" class=" text-dark etiquetas">Estrategias:</label>

                              <select name="fk_estrategias_id" class="selectAltura	form-select bg-white p-1 border border-dark" id="fk_estrategias_id" name="fk_estrategias_id" value="{{ $mo -> nombreEstra }}">
                              <option value="">Seleccione</option>
                              @foreach ($estrategias as $id =>$nombre)
                              <option value="{{$id}}"@if ($nombre === $mo ->nombreEstra) selected @endif>{{$nombre}}</option>
                              @endforeach
                              </select>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="fk_lineaaccion_id" class="text-dark etiquetas">Lineas de accion:</label>

                              <select name="fk_lineaaccion_id" class="selectAltura	form-select bg-white p-1 border border-dark" id="fk_lineaaccion_id" name="fk_lineaaccion_id" value="{{$mo -> nombreLine }}">
                              <option value="">Seleccione</option>
                              @foreach ($lineas_accion as $id =>$nombre)
                              <option value="{{$id}}"@if ($nombre === $mo ->nombreLine) selected @endif>{{$nombre}}</option>
                              @endforeach
                              </select>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="fk_es_transversal_id" class="text-dark etiquetas">Estrategia transversal:</label>

                              <select name="fk_es_transversal_id" class="selectAltura	form-select bg-white p-1 border border-dark" id="fk_es_transversal_id" name="fk_es_transversal_id" value="{{ $mo -> nombreEs }}">
                              <option value="">Seleccione</option>
                              @foreach ($es_transversal as $id =>$nombre)
                              <option value="{{$id}}"@if ($nombre === $mo ->nombreEs) selected @endif>{{$nombre}}</option>
                              @endforeach
                              </select>
                                  </div>
                                  <div class="form-group col-md-6">
                                  <label for="nom_indicador" class="text-dark etiquetas">Nombre del indicador:</label>
                                  <input type="text" class="form-control bg-white p-3 border border-dark" id="nom_indicador" name="nom_indicador" value="{{ $mo -> nom_indicador }}">
                                          @error('nom_indicador')
                                          <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                                          @enderror
                                        </div>
                                      </div>


                <div class="form-row container">

                <div class="form-group col-md-6">
                    <label for="des_indicador" class="text-dark etiquetas">Descripcion del indicador:</label>
                    <input type="text" class="form-control bg-white p-3 border border-dark" id="des_indicador" name="des_indicador" value="{{$mo -> des_indicador }}">
                            @error('des_indicador')
                            <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                            @enderror
                          </div>

                          <div class="form-group col-md-6">
                            <label for="fk_tipo_indicador_id" class="text-dark etiquetas">Tipo de Indicador:</label>

                            <select name="fk_tipo_indicador_id" class="selectAltura	form-select bg-white p-1 border border-dark" id="fk_tipo_indicador_id" name="fk_tipo_indicador_id" value="{{$mo -> nombreTipo }}">
                            <option value="">Seleccione</option>
                            @foreach ($tipo_indicador as $id =>$nombre)
                            <option value="{{$id}}"@if ($nombre === $mo ->nombreTipo) selected @endif  >{{$nombre}}</option>
                            @endforeach
                            </select>
                                </div>
                <div class="form-group col-md-6">
                  <label for="base_calculo" class="text-dark etiquetas">Base de Calculo:</label>
                <input type="text" class="form-control bg-white p-3 border border-dark" id="base_calculo" name="base_calculo" value="{{$mo -> base_calculo }}">
                  @error('base_calculo')
                    <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group col-md-6">
                  
                      </div>

                      <div class="form-group col-md-6">
                          <label for="tipo_evidencia" class="text-dark etiquetas">Tipo de evidencia:</label>
                      <input type="text" class="form-control bg-white p-3 border border-dark" id="tipo_evidencia" name="tipo_evidencia" value="{{ $mo -> tipo_evidencia}}">
                          @error('tipo_evidencia')
                            <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                      @enderror
                        </div>
                  <div class="form-group col-md-6">
                          <label for="fk_tipo_indicador2_id" class="text-dark etiquetas">Nivel de indicador:</label>
                          <select name="fk_tipo_indicador2_id" class="selectAltura	form-select bg-white p-1 border border-dark" id="fk_tipo_indicador2_id" name="fk_tipo_indicador2_id" value="{{$mo -> nombreTipo2 }}">
                          <option value="">Seleccione</option>
                          @foreach ($tipo_indicador2 as $id =>$nombre)
                          <option value="{{$id}}"@if ($nombre === $mo ->nombreTipo2) selected @endif>{{$nombre}}</option>
                          @endforeach
                          </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="linea_base" class="text-dark etiquetas">Liena Base (año):</label>
                <input type="text" class="form-control bg-white p-3 border border-dark" id="linea_base" name="linea_base" value="{{ $mo -> linea_base}}">
                    @error('linea_base')
                      <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                @enderror
                  </div>
                  <div class="form-group col-md-6">
                      <label for="meta" class="text-dark etiquetas">Meta (Año):</label>
                  <input type="text" class="form-control bg-white p-3 border border-dark" id="meta" name="meta" value="{{ $mo -> meta }}">
                      @error('meta')
                        <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                  @enderror
                    </div>
                    <div class="form-group col-md-12">
                        <label for="nota" class="text-dark etiquetas">Notas:</label>
                        <textarea class="form-control bg-white border border-dark p-2" id="nota" name="nota" value="{{ $mo -> nota}}" rows="3">{{$mo -> nota}}</textarea>
                        @error('nota')
                        <div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="form-group col-md-12">
                         <label for="desc_acc_rea" class="text-dark etiquetas">Descripcion de las acciones programadas en ejecutar fisica</label>
                         <textarea class="form-control bg-white border border-dark p-2" id="desc_acc_rea" name="desc_acc_rea" value="{{ $mo -> desc_acc_rea }}" rows="3">{{$mo -> desc_acc_rea}}</textarea>
                        @error('desc_acc_rea')
                        <div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
                        @enderror
                       </div>
                       <div class="form-group col-md-12">
                          <label for="desc_acc_rea_peri" class="text-dark etiquetas">Descripcion de las acciones que se realizaron en el periodo reportado</label>
                          <textarea class="form-control bg-white border border-dark p-2" id="desc_acc_rea_peri" name="desc_acc_rea_peri" value="{{ $mo -> desc_acc_rea_peri}}" rows="3">{{$mo -> desc_acc_rea_peri}}</textarea>
                          @error('desc_acc_rea_peri')
                          <div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group col-md-12">
                           <label for="desc_bene_obte" class="text-dark etiquetas">Descripcion del beneficio obtenido</label>
                           <textarea class="form-control bg-white border border-dark p-2" id="desc_bene_obte" name="desc_bene_obte" value="{{ $mo -> desc_bene_obte}}" rows="3">{{$mo -> desc_bene_obte}}</textarea>
                          @error('desc_bene_obte')
                          <div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
                          @enderror

                         </div>
                         <div class="form-group col-md-12">
                            <label for="nu_tipo_pob_benefi" class="text-dark etiquetas">Numero y tipo de poblacion beneficiada</label>
                            <textarea class="form-control bg-white border border-dark p-2" id="nu_tipo_pob_benefi" name="nu_tipo_pob_benefi" value="{{ $mo -> nu_tipo_pob_benefi }}" rows="3">{{$mo -> nu_tipo_pob_benefi}}</textarea>
                            @error('nu_tipo_pob_benefi')
                            <div class="alert alert-danger text-white" role="alert">{{ $message }}</div>
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
</div>
