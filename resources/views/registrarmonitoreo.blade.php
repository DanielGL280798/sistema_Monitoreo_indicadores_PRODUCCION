@extends('app')
@section('content')

@unless(empty( $posts))
@endif
<br><br><br><br>


@if(\Session::has('guardado'))
<script type="text/javascript">
  Swal.fire({
    position: 'center',
    icon: 'success',
    title: 'Sus datos son guradados correctamente',
    showConfirmButton: true,
  })
  @endif
</script>

<div class="container align-items-center">
  <div class="card">
      <div class="card-body">
  <div class="card">
    <H4 class="text-center"> SECRETARIA COORDINADORA DEL SEGUIMIENTO A LOS INDICADORES DEL PMD(JEFATURA DE GABINETE)</H4>
  <H5 class="text-center">MONITOREO DE INDICADORES </H5>
  <form method="post" action="{{route('registrarmonitoreo')}}" id="formulario">
    @csrf
  <div class="card-body">
  <div class="card">
  <div class="col-md-12 mx-auto">
  <H6 class="text-center"><center><strong>PLAN MUNICIPAL DE DESARROLLO DE TULANCINGO DE BRAVO 2020-2024 publicado:</strong></center></H6>

  </div>
      <div class="form-row container">

        <div class="form-group col-md-6">
            <label for="fk_secretarias_id" class="text-dark etiquetas">Secretaria:</label>

            <select name="fk_secretarias_id" class="selectAltura	form-select bg-white p-1 border border-dark" id="fk_secretarias_id" name="fk_secretarias_id" value="{{ old('fk_secretarias_id') }}">
            <option value=" ">Seleccione</option>
            @foreach ($secretarias as $id =>$nombre)
            <option value="{{$id}}" {{ (old('fk_secretarias_id') == $id ? 'selected' : '')}}>{{$nombre}} </option>
            @endforeach
            </select>
            @error('fk_secretarias_id')
            <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="fk_direcciones_id" class="text-dark etiquetas">Dirección:</label>

            <select name="fk_direcciones_id" class="selectAltura	form-select bg-white p-1 border border-dark"
            id="fk_direcciones_id" name="fk_direcciones_id" value="{{ old('fk_direcciones_id') }}">
            <option value=" ">Seleccione</option>
            @foreach ($direcciones as $id =>$direcciones)
            <option value="{{$id}}" {{ (old('fk_direcciones_id') == $id ? 'selected' : '')}}>{{$direcciones}}</option>
            @endforeach
            </select>
            @error('fk_direcciones_id')
            <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="fk_indicador_id" class="text-dark etiquetas">Indicador del PMD al que se alinea:</label>
            <select name="fk_indicador_id" class="selectAltura	form-select bg-white p-1 border border-dark" id="fk_indicador_id" name="fk_indicador_id" value="{{ old('fk_indicador_id') }}">
            <option value=" ">Seleccione</option>
            @foreach ($indicador as $id =>$nombre)
            <option value="{{$id}}" {{ (old('fk_indicador_id') == $id ? 'selected' : '')}}>{{$nombre}}</option>
            @endforeach
            </select>
            @error('fk_indicador_id')
            <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
            @enderror
        </div>

                <div class="form-group col-md-6">
                    <label for="fk_ejes_id" class="text-dark etiquetas">Eje estrategico:</label>
                    <select name="fk_ejes_id" class="selectAltura	form-select bg-white p-1 border border-dark" id="fk_ejes_id" name="fk_ejes_id" value="{{ old('fk_ejes_id') }}">
                    <option value=" ">Seleccione</option>
                    @foreach ($ejes as $id =>$nombre)
                    <option value="{{$id}}" {{ (old('fk_ejes_id') == $id ? 'selected' : '')}}>{{$nombre}}</option>
                    @endforeach
                    </select>
                    @error('fk_ejes_id')
                    <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="fk_estrategias_id" class=" text-dark etiquetas">Estrategias:</label>

                  <select name="fk_estrategias_id" class="selectAltura	form-select bg-white p-1 border border-dark" id="fk_estrategias_id" name="fk_estrategias_id" value="{{ old('fk_estrategias_id') }}">
                  <option value=" ">Seleccione</option>
                  @foreach ($estrategias as $id =>$nombre)
                  <option value="{{$id}}" {{ (old('fk_estrategias_id') == $id ? 'selected' : '')}}>{{$nombre}}</option>
                  @endforeach
                  </select>
                  @error('fk_estrategias_id')
                  <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="fk_lineaaccion_id" class="text-dark etiquetas">Lineas de acción:</label>

                  <select name="fk_lineaaccion_id" class="selectAltura	form-select bg-white p-1 border border-dark" id="fk_lineaaccion_id" name="fk_lineaaccion_id" value="{{ old('fk_lineaaccion_id') }}">
                  <option value=" ">Seleccione</option>
                  @foreach ($lineas_accion as $id =>$nombre)
                  <option value="{{$id}}" {{(old('fk_lineaaccion_id') == $id ? 'selected' : '')}}>{{$nombre}}</option>
                  @endforeach
                  </select>
                  @error('fk_lineaaccion_id')
                  <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group col-md-6">
                  <label for="fk_es_transversal_id" class="text-dark etiquetas">Estrategia transversal:</label>

                  <select name="fk_es_transversal_id" class="selectAltura	form-select bg-white p-1 border border-dark" id="fk_es_transversal_id" name="fk_es_transversal_id" value="{{ old('fk_es_transversal_id') }}">
                  <option value=" ">Seleccione</option>
                  @foreach ($es_transversal as $id =>$nombre)
                  <option value="{{$id}}" {{ (old('fk_es_transversal_id') == $id ? 'selected' : '')}}>{{$nombre}}</option>
                  @endforeach
                  </select>
                  @error('fk_es_transversal_id')
                  <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                  @enderror
                      </div>
                      <div class="form-group col-md-6">
                      <label for="nom_indicador" class="text-dark etiquetas">Nombre del indicador:</label>
                      <input type="text" class="form-control bg-white p-3 border border-dark" id="nom_indicador" name="nom_indicador" value="{{ old('nom_indicador') }}">
                              @error('nom_indicador')
                              <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>


<div class="form-row container">

  <div class="form-group col-md-6">
        <label for="des_indicador" class="text-dark etiquetas">Descripción del indicador:</label>
        <input type="text" class="form-control bg-white p-3 border border-dark" id="des_indicador" name="des_indicador" value="{{ old('des_indicador') }}">
                @error('des_indicador')
                <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group col-md-6">
                <label for="fk_tipo_indicador_id" class="text-dark etiquetas">Tipo de Indicador:</label>

                <select name="fk_tipo_indicador_id" class="selectAltura	form-select bg-white p-1 border border-dark" id="fk_tipo_indicador_id" name="fk_tipo_indicador_id" value="{{ old('fk_tipo_indicador_id') }}">
                <option value=" ">Seleccione</option>
                @foreach ($tipo_indicador as $id =>$nombre)
                <option value="{{$id}}"{{ (old('fk_tipo_indicador_id') == $id ? 'selected' : '')}}>{{$nombre}}</option>
                @endforeach
                </select>
                @error('fk_tipo_indicador_id')
                <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                @enderror
                    </div>
  <div class="form-group col-md-6">
      <label for="base_calculo" class="text-dark etiquetas">Base de Calculo(formula):</label>
  <input type="text" class="form-control bg-white p-3 border border-dark" id="base_calculo" name="base_calculo" value="{{ old('base_calculo') }}">
      @error('base_calculo')
        <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
  @enderror
    </div>

          <div class="form-group col-md-6">
              <label for="tipo_evidencia" class="text-dark etiquetas">Tipo de evidencia:</label>
          <input type="text" class="form-control bg-white p-3 border border-dark" id="tipo_evidencia" name="tipo_evidencia" value="{{ old('tipo_evidencia') }}">
              @error('tipo_evidencia')
                <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
          @enderror
            </div>
      <div class="form-group col-md-6">
              <label for="fk_tipo_indicador2_id" class="text-dark etiquetas">Nivel de indicador:</label>
              <select name="fk_tipo_indicador2_id" class="selectAltura	form-select bg-white p-1 border border-dark" id="fk_tipo_indicador2_id" name="fk_tipo_indicador2_id" value="{{ old('fk_tipo_indicador2_id') }}">
              <option value=" ">Seleccione</option>
              @foreach ($tipo_indicador2 as $id =>$nombre)
              <option value="{{$id}}"{{ (old('fk_tipo_indicador2_id') == $id ? 'selected' : '')}}>{{$nombre}}</option>
              @endforeach
              </select>
              @error('fk_tipo_indicador2_id')
                <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
          @enderror
    </div>
    <div class="form-group col-md-6">

      </div>
    <div class="form-group col-md-6">
        <label for="linea_base" class="text-dark etiquetas">Linea Base(año) :</label>
    <input type="number" class="form-control bg-white p-3 border border-dark" id="linea_base" name="linea_base" value="{{ old('linea_base') }}">
        @error('linea_base')
          <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
    @enderror
      </div>
      <div class="form-group col-md-6">
          <label for="descripcion_linea_base" class="text-dark etiquetas">Descripción Base:</label>
      <input type="text" class="form-control bg-white p-3 border border-dark" id="descripcion_linea_base" name="descripcion_linea_base" value="{{ old('descripcion_linea_base') }}">
          @error('descripcion_linea_base')
            <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
      @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="metas" class="text-dark etiquetas">Meta :</label>
        <input type="number"  class="form-control bg-white p-3 border border-dark" id="metas" name="metas" value="{{ old('metas') }}">
            @error('metas')
              <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
        @enderror
          </div>
        <div class="form-group col-md-6">
          <label for="descripcion_meta" class="text-dark etiquetas">Descripción Meta:</label>
      <input type="text" class="form-control bg-white p-3 border border-dark" id="descripcion_meta" name="descripcion_meta" value="{{ old('descripcion_meta') }}">
          @error('descripcion_meta')
            <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
      @enderror
        </div>
        <div class="form-group col-md-12">
            <label for="nota" class="text-dark etiquetas">Notas:</label>
            <textarea class="form-control bg-white border border-dark p-2" id="nota" name="nota" value="{{ old('nota') }}" rows="3">{{old('nota')}}</textarea>
						@error('nota')
						<div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
						@enderror
          </div>

          <div class="form-group col-md-12">
             <label for="desc_acc_rea" class="text-dark etiquetas">Descripción de las acciones programadas en ejecutar fisica</label>
             <textarea class="form-control bg-white border border-dark p-2" id="desc_acc_rea" name="desc_acc_rea" value="{{ old('desc_acc_rea') }}" rows="3">{{old('desc_acc_rea')}}</textarea>
 						@error('desc_acc_rea')
 						<div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
 						@enderror
           </div>
           <div class="form-group col-md-12">
              <label for="desc_acc_rea_peri" class="text-dark etiquetas">Descripción de las acciones que se realizaron en el periodo reportado</label>
              <textarea class="form-control bg-white border border-dark p-2" id="desc_acc_rea_peri" name="desc_acc_rea_peri" value="{{ old('desc_acc_rea_peri') }}" rows="3">{{old('desc_acc_rea_peri')}}</textarea>
  						@error('desc_acc_rea_peri')
  						<div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
  						@enderror
            </div>

             <div class="form-group col-md-12">
                <label for="nu_tipo_pob_benefi" class="text-dark etiquetas">Numero y tipo de poblacion beneficiada</label>
                <textarea class="form-control bg-white border border-dark p-2" id="nu_tipo_pob_benefi" name="nu_tipo_pob_benefi" value="{{ old('nu_tipo_pob_benefi') }}" rows="3">{{old('nu_tipo_pob_benefi')}}</textarea>
    						@error('nu_tipo_pob_benefi')
    						<div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
    						@enderror
              </div>
              <div class="form-group col-md-12">
                 <label for="desc_bene_obte" class="text-dark etiquetas">Descripción del beneficio obtenido</label>
                 <textarea class="form-control bg-white border border-dark p-2" id="desc_bene_obte" name="desc_bene_obte" value="{{ old('desc_bene_obte') }}" rows="3">{{old('desc_bene_obte')}}</textarea>
                @error('desc_bene_obte')
                <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                @enderror

               </div>

              <div class="form-row container">
          <div class="form-group col-md-6">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div></from></div>
  </div>  </div>  </div>


@endsection
