@extends('app')
@section('content')

@unless(empty( $posts))
@endif
<br><br><br><br>
<div class="container align-items-center">
  <div class="card">
      <div class="card-body">
  <div class="card">
    <H4 class="text-center"> SECRETARIA COORDINADORA DEL SEGUIMIENTO A LOS INDICADORES DEL PMD(JEFATURA DE GABINETE)</H4>
  <H5 class="text-center">CARGA DE AVANCE CUARTO TRIMESTRE </H5>
  <form method="post"enctype="multipart/form-data"  action="{{route('cargaavance3')}}" id="formulario">

    @csrf
    @if(\Session::has('guardado'))
    <script type="text/javascript">
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Datos Guardados Exitosamente',
        showConfirmButton: true,
      })
      @endif
    </script>
  <div class="card-body">
  <div class="card">
  <div class="col-md-12 mx-auto">
  <H6 class="text-center"><center><strong>PLAN MUNICIPAL DE DESARROLLO DE TULANCINGO DE BRAVO 2020-2024 publicado:</strong></center></H6>
  </div>

      <div class="form-row container">
        <div class="form-group col-md-6">
            <label for="fk_nom_id" class="text-dark etiquetas">Nombre del Indicador:</label>

            <select name="fk_nom_id" class="selectAltura	form-select bg-white p-1 border border-dark" id="fk_nom_id" name="fk_nom_id" value="{{ old('fk_nom_id') }}">
            <option value=" ">Seleccione</option>
            @foreach ($monitoreo as $id =>$nom_indicador)
            <option value="{{$id}}" {{ (old('fk_nom_id') == $id ? 'selected' : '')}}>{{$nom_indicador}}</option>
            @endforeach
            </select>
            @error('fk_nom_id')
            <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="metas" class="text-dark etiquetas">Meta actual:</label>

            <input type="number" onchange="suma()"   class="form-control bg-white p-3 border border-dark" id="metas" name="metas" value="{{ old('metas') }}">
                    @error('meta')
                    <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                    @enderror
                  </div>

        <div class="form-group col-md-6">
            <label for="meta" class="text-dark etiquetas">Meta Realizada:</label>

            <input type="number" onchange="suma()"   class="form-control bg-white p-3 border border-dark" id="meta" name="meta" value="{{ old('meta') }}">
                    @error('meta')
                    <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                    @enderror
                  </div>

        <div class="form-group col-md-6">
          <br>
          <label for="evidencia" class="text-dark etiquetas">Evidencia :</label>
          <input accept="application/pdf" type="file" name="evidencia" id="evidencia" onchange="">
          @error('evidencia')
          <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
          @enderror
                </div>

                    <div class="form-group col-md-6">

                      <label for="porcentaje_avance" class="text-dark etiquetas">Porcentaje de Avance:</label>
                      <input type="float"  class="form-control bg-white p-3 border border-dark" id="porcentaje_avance" name="porcentaje_avance" value= "{{ old('porcentaje_avance') }}">
                              @error('porcentaje_avance')
                              <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                              @enderror

                            </div>

                <div class="form-group col-md-6">
                  <label for="Logros_beneficio" class="text-dark etiquetas">logro/beneficio:</label>
                  <input type="text" class="form-control bg-white p-3 border border-dark" id="Logros_beneficio" name="Logros_beneficio" value="{{ old('Logros_beneficio') }}">
                          @error('Logros_beneficio')
                          <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group col-md-6">
                          <label for="acciones" class="text-dark etiquetas">Acciones realizadas:</label>

                          <input type="text" class="form-control bg-white p-3 border border-dark" id="acciones" name="acciones" value="{{ old('acciones') }}">
                                  @error('acciones')
                                  <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                                  @enderror
                                </div>
                <div class="form-group col-md-6">
                  <label for="acciones_realizar" class="text-dark etiquetas">Acciones por realizadar:</label>
                  <input type="text" class="form-control bg-white p-3 border border-dark" id="acciones_realizar" name="acciones_realizar" value="{{ old('acciones_realizar') }}">
                          @error('acciones_realizar')
                          <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                          @enderror
                        </div>
                <div class="form-group col-md-6">
                  <label for="observaciones" class="text-dark etiquetas">Observaciones:</label>
                  <input type="text" class="form-control bg-white p-3 border border-dark" id="observaciones" name="observaciones" value="{{ old('observaciones') }}">
                          @error('observaciones')
                          <div class="alert text-center" style="background-color:#58D68D ; color:white" role="alert">{{ $message }}</div>
                          @enderror
                        </div>
                <input type="hidden" class="form-control bg-white p-3 border border-dark" id="fk_users_id" name="fk_users_id" value="{{Auth::user()->id}}">

              <div class="form-row container">
          <div class="form-group col-md-6">
        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Enviar</button>
      </div>
    </form>
    </div>

  </div>  </div>  </div>
<script type="text/javascript">
function suma() {
    var total = 0;

    var meta = parseFloat(document.getElementById("meta").value);
    var metas = parseFloat(document.getElementById("metas").value);

    total= meta / metas * 100;

    document.getElementById("porcentaje_avance").value = total.toFixed(2);
}
</script>
@endsection
