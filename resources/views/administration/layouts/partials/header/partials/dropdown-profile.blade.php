<div class="dropdown d-inline-block">
    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="rounded-circle header-profile-user" src="{{ asset('images/administration/users/avatar-2.jpg') }}" alt="Header Avatar">
        <span class="d-none d-xl-inline-block ml-1">{{ auth()->user()->name}}</span>
        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-right">
        <!-- item-->
        <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Mi Perfil</a>
        <a class="dropdown-item d-block" href="#"><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> Configuraciones</a>
        <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle mr-1"></i> Bloquear sesión</a>
        <div class="dropdown-divider"></div>@guest
        @else
        <li class="nav-item ">
            <a class="nav-link" aria-current="page" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" href=""><i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar sesión</a>
        </li>
        @endguest

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

    </div>
</div>
