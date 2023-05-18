<div class="dropdown">

      <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      <a>
     <i class="fa fa-pencil">
     </i> Monitoreo Indicadores
      </button>
<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
        <li> <a class="nav-link {{ Route::is('registrarmonitoreo') ? 'active bg-success text-white' : '' }}"
          aria-current="page" href="{{route('registrarmonitoreo')}}"><i class="fa fa-pencil"></i>Registrar Monitoreo</a>
        </li>
        <a class="nav-link {{ Route::is('cargaavance') ? 'active bg-success text-white' : '' }}"
        aria-current="page" href="{{route('cargaavance')}}"><i class="fa fa-pencil"></i>Registrar 1° Trimestre</a>
        <a class="nav-link {{ Route::is('cargaavance1') ? 'active bg-success text-white' : '' }}"
        aria-current="page" href="{{route('cargaavance1')}}"><i class="fa fa-pencil"></i>Registrar 2° Trimestre</a>
        <a class="nav-link {{ Route::is('cargaavance2') ? 'active bg-success text-white' : '' }}"
        aria-current="page" href="{{route('cargaavance2')}}"><i class="fa fa-pencil"></i>Registrar 3° Trimestre</a>
        <a class="nav-link {{ Route::is('cargaavance3') ? 'active bg-success text-white' : '' }}"
        aria-current="page" href="{{route('cargaavance3')}}"><i class="fa fa-pencil"></i>Registrar 4° Trimestre</a>

                </a>

</ul>

</div>
<div class="card">
</div>


<div class="dropdown">
  <form class="form-inline">



      <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      <a>
     <i class="fa fa-pencil">
     </i>Datos de evaluacion
      </button>
<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
        <li> <a class="nav-link {{ Route::is('monitoreocon') ? 'active bg-success text-white' : '' }}"
          aria-current="page" href="monitoreocon?fk_users_id={{Auth::user()->id}}"><i class="fa fa-pencil"></i>Registrar Monitoreo</a>
        </li>
            <li> <a class="nav-link {{ Route::is('cargadeavance') ? 'active bg-success text-white' : '' }}"
              aria-current="page" href="cargadeavance?fk_users_id={{Auth::user()->id}}"><i class="fa fa-pencil"></i>1° Carga de avance</a>
                </li>
                <li> <a class="nav-link {{ Route::is('cargadeavance1') ? 'active bg-success text-white' : '' }}"
                  aria-current="page" href="cargadeavance1?fk_users_id={{Auth::user()->id}}"><i class="fa fa-pencil"></i>2° Carga de avance</a>
                    </li>
                    <li> <a class="nav-link {{ Route::is('cargadeavance2') ? 'active bg-success text-white' : '' }}"
                      aria-current="page" href="cargadeavance2?fk_users_id={{Auth::user()->id}}"><i class="fa fa-pencil"></i>3° Carga de avance</a>
                        </li>
                        <li> <a class="nav-link {{ Route::is('cargadeavance3') ? 'active bg-success text-white' : '' }}"
                          aria-current="page" href="cargadeavance3?fk_users_id={{Auth::user()->id}}"><i class="fa fa-pencil"></i>4° Carga de avance</a>
            </li>

                </a>
</form>
</ul>
</div>
