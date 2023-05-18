{{-- <div class="dropdown">

      <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      <a>
     <i class="fa fa-pencil">
     </i>   Monitoreo Indicadores
      </button>
<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
        <li> <a class="nav-link {{ Route::is('registrarmonitoreo') ? 'active bg-success text-white' : '' }}" aria-current="page" href="{{route('registrarmonitoreo')}}"><i class="fa fa-pencil"></i>Registrar Monitoreo</a>
        </li>
        <a class="nav-link {{ Route::is('cargaavance') ? 'active bg-success text-white' : '' }}"
        aria-current="page" href="{{route('cargaavance')}}"><i class="fa fa-pencil"></i>  Registrar 1° Trimestre</a>
        <a class="nav-link {{ Route::is('cargaavance1') ? 'active bg-success text-white' : '' }}"
        aria-current="page" href="{{route('cargaavance1')}}"><i class="fa fa-pencil"></i>  Registrar 2° Trimestre</a>
        <a class="nav-link {{ Route::is('cargaavance2') ? 'active bg-success text-white' : '' }}"
        aria-current="page" href="{{route('cargaavance2')}}"><i class="fa fa-pencil"></i>  Registrar 3° Trimestre</a>
        <a class="nav-link {{ Route::is('cargaavance3') ? 'active bg-success text-white' : '' }}"
        aria-current="page" href="{{route('cargaavance3')}}"><i class="fa fa-pencil"></i>  Registrar 4° Trimestre</a>
                </a>

</ul>

</div> --}}
<div class="card">
</div>


<div class="dropdown">

      <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1"
      data-bs-toggle="dropdown" aria-expanded="false">
      <a>
     <i class="fa fa-pencil">
     </i>  Datos de evaluacion
      </button>
<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
        {{-- <li> <a class="nav-link {{ Route::is('monitoreocon') ? 'active bg-success text-white' : '' }}"
          aria-current="page" href="monitoreocon"><i class="fa fa-pencil"></i>Registrar Monitoreo</a>
        </li> --}}
            {{-- <li> <a class="nav-link {{ Route::is('cargadeavance') ? 'active bg-success text-white' : '' }}"
              aria-current="page" href="cargadeavance"><i class="fa fa-pencil"></i>1° Carga de avance</a>
                </li>
                <li> <a class="nav-link {{ Route::is('cargadeavance1') ? 'active bg-success text-white' : '' }}"
                  aria-current="page" href="cargadeavance1"><i class="fa fa-pencil"></i>2° Carga de avance</a>
                    </li>
                    <li> <a class="nav-link {{ Route::is('cargadeavance2') ? 'active bg-success text-white' : '' }}"
                      aria-current="page" href="cargadeavance2"><i class="fa fa-pencil"></i>3° Carga de avance</a>
                        </li>
                        <li> <a class="nav-link {{ Route::is('cargadeavance3') ? 'active bg-success text-white' : '' }}"
                          aria-current="page" href="cargadeavance3"><i class="fa fa-pencil"></i>4° Carga de avance</a>
                            </li> --}}
                            <li> <a class="nav-link {{ Route::is('cargadeavance4') ? 'active bg-success text-white' : '' }}"
                              aria-current="page" href="cargadeavance4"><i class="fa fa-pencil"></i>Carga de avance 4</a>
                                </li>
                </a>

</ul>
</div>
{{--
<div class="card">
</div>
<div class="btn-group">
  <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
     <a>
      <i class="fa fa-pencil">
    </i>    Catalogos
  </button>
  <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
  <a class="dropdown-item {{ Route::is('catalogodirecciones') ? 'active bg-success text-white' : '' }}" aria-current="page" href="{{route('catalogodirecciones')}}"><i class="fa fa-pencil"></i>  Registrar Direcciones</a>

   <a class="dropdown-item {{ Route::is('catalogosecretarias') ? 'active bg-success text-white' : '' }}" aria-current="page" href="{{route('catalogosecretarias')}}"><i class="fa fa-pencil"></i>  Registrar Secretaria</a>

  <a class="dropdown-item {{ Route::is('catalogoejes') ? 'active bg-success text-white' : '' }}" aria-current="page" href="{{route('catalogoejes')}}"><i class="fa fa-pencil"></i>  Registrar Ejes Estrategico</a>

<a class="dropdown-item {{ Route::is('catalogoindicador') ? 'active bg-success text-white' : '' }}" aria-current="page" href="{{route('catalogoindicador')}}"><i class="fa fa-pencil"></i>  Registrar Indicador</a>

<a class="dropdown-item  {{ Route::is('catalogoestrategias') ? 'active bg-success text-white' : '' }}" aria-current="page" href="{{route('catalogoestrategias')}}"><i class="fa fa-pencil"></i>  Registrar Estrategias</a>

<a class="dropdown-item   {{ Route::is('catalogolineas_accion') ? 'active bg-success text-white' : '' }}" aria-current="page" href="{{route('catalogolineas_accion')}}"><i class="fa fa-pencil"></i>  Registrar Lineas de Accion</a>

<a class="dropdown-item  {{ Route::is('catalogoes_transversal') ? 'active bg-success text-white' : '' }}" aria-current="page" href="{{route('catalogoes_transversal')}}"><i class="fa fa-pencil"></i>  Registrar Estrategias<br> Transversal</a>

<a class="dropdown-item  {{ Route::is('catalogotipo_indicador') ? 'active bg-success text-white' : '' }}" aria-current="page" href="{{route('catalogotipo_indicador')}}"><i class="fa fa-pencil"></i> Registrar Tipo de Indicador</a>

<a class="dropdown-item  {{ Route::is('catalogotipo_indicador2') ? 'active bg-success text-white' : '' }}" aria-current="page" href="{{route('catalogotipo_indicador2')}}"><i class="fa fa-pencil"></i>  Reg. Tipo de Nivel de<br> Indicador</a>

<a class="dropdown-item {{ Route::is('catalogoperiodicidad') ? 'active bg-success text-white' : '' }}" aria-current="page" href="{{route('catalogoperiodicidad')}}"><i class="fa fa-pencil"></i>  Registrar Periodicidad</a>

<a class="dropdown-item {{ Route::is('catalogostatus') ? 'active bg-success text-white' : '' }}" aria-current="page" href="{{route('catalogostatus')}}"><i class="fa fa-pencil"></i>  Registrar Estatus</a>

    </a>
  </div>
</div> --}}
