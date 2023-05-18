<div data-simplebar class="h-100">

    <div class="user-wid text-center py-4">
        <div class="user-img">
            <img src="{{ asset('images/administration/users/avatar-2.jpg') }}" alt="" class="avatar-md mx-auto rounded-circle">
        </div>

        <div class="mt-3">

            <a href="#" class="text-dark font-weight-medium font-size-16">{{ auth()->user()->name}}</a>
            <p class="text-body mt-1 mb-0 font-size-13">

                  @if(Auth::user()->hasRole('admin'))
              Administrador</p>
              @else
              Oficina
              @endif

        </div>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Administración</li>

            @if (Auth::user()->hasRole('Admin'))
                          @include('administration.layouts.partials.menu_Admin')

                          @elseif (Auth::user()->hasRole('user'))
                             @include('administration.layouts.partials.menu_User')

                             @elseif (Auth::user()->hasRole('dire'))
                                @include('administration.layouts.partials.menu_User')

                                @elseif (Auth::user()->hasRole('secret'))
                                   @include('administration.layouts.partials.menu_User')

                                  

                                      @elseif (Auth::user()->hasRole('jefe_gabinate'))
                                         @include('administration.layouts.partials.menu_User')

                                         @elseif (Auth::user()->hasRole('cordiTec'))
                                            @include('administration.layouts.partials.menu_User')

                                            @elseif (Auth::user()->hasRole('secretp'))
                                               @include('administration.layouts.partials.menu_User')

                                            @elseif (Auth::user()->hasRole('secretgm'))
                                               @include('administration.layouts.partials.menu_User')

                                            @elseif (Auth::user()->hasRole('secretduo'))
                                               @include('administration.layouts.partials.menu_User')

                                            @elseif (Auth::user()->hasRole('secretdhs'))
                                               @include('administration.layouts.partials.menu_User')

                                            @elseif (Auth::user()->hasRole('secretsc'))
                                               @include('administration.layouts.partials.menu_User')

                                            @elseif (Auth::user()->hasRole('secretfe'))
                                               @include('administration.layouts.partials.menu_User')

                                            @elseif (Auth::user()->hasRole('secretcedc'))
                                               @include('administration.layouts.partials.menu_User')

                                            @elseif (Auth::user()->hasRole('secretta'))
                                               @include('administration.layouts.partials.menu_User')

                                               @elseif (Auth::user()->hasRole('secretc'))
                                                  @include('administration.layouts.partials.menu_User')

                                                  @elseif (Auth::user()->hasRole('secrete'))
                                                     @include('administration.layouts.partials.menu_User')

                                                     @elseif (Auth::user()->hasRole('secretsm'))
                                                        @include('administration.layouts.partials.menu_User')

                                                        @elseif (Auth::user()->hasRole('secrets'))
                                                           @include('administration.layouts.partials.menu_User')

                                                           @elseif (Auth::user()->hasRole('secretca'))
                                                              @include('administration.layouts.partials.menu_User')

                                                            @elseif (Auth::user()->hasRole('secretdif'))
                                                               @include('administration.layouts.partials.menu_User')
                                                             @elseif (Auth::user()->hasRole('presi'))
                                                                @include('administration.layouts.partials.menu_to')

                        <!--  @elseif (Auth::user()->hasRole('InspectorMedioAmbiente'))
                              @include('administration.layouts.partials.menu_InspectorMedioAmbiente')

                            @elseif (Auth::user()->hasRole('DireccionLicencias'))
                                @include('administration.layouts.partials.menu_DireccionLicencias')

                              @elseif (Auth::user()->hasRole('InspeccionLicencias'))
                                  @include('administration.layouts.partials.menu_InspectorLicencias')
                                  @elseif (Auth::user()->hasRole('DireccionLimpias'))
                                      @include('administration.layouts.partials.menu_DireccionLimpias')

                                      @elseif (Auth::user()->hasRole('InspeccionLimpias'))
                                          @include('administration.layouts.partials.menu_InspectorLimpias')
                                          @elseif (Auth::user()->hasRole('Admin'))
                                              @include('administration.layouts.partials.menu_Admin')

                                              @elseif (Auth::user()->hasRole('DireccionReglamentos'))
                                                  @include('administration.layouts.partials.menu_DireccionReglamentos')
                                                  @elseif (Auth::user()->hasRole('DireccionBomberos'))
                                                      @include('administration.layouts.partials.menu_DireccionBomberos')

                                                      @elseif (Auth::user()->hasRole('InspectorReglamentos'))
                                                          @include('administration.layouts.partials.menu_InspectorReglamentos')
                                                          @elseif (Auth::user()->hasRole('InspectorBomberos'))
                                                              @include('administration.layouts.partials.menu_InspectorBomberos') -->

                      @endif






<!--
            @if(Auth::user()->hasRole('user'))
              @include('administration.layouts.partials.item-dashboard')
              @include('administration.layouts.partials.item-payments')
              @include('administration.layouts.partials.item-formalities')

            @endif

            @if(Auth::user()->hasRole('predial'))
              @include('administration.layouts.partials.item-dashboard')
              @include('administration.layouts.partials.item-predial')
              @endif

              @if(Auth::user()->hasRole('admin'))
              @include('administration.layouts.partials.item-dashboard')
              @include('administration.layouts.partials.item-statistic')
              @include('administration.layouts.partials.item-payments')
              @include('administration.layouts.partials.item-formalities')
              @include('administration.layouts.partials.item-users')
              @include('administration.layouts.partials.item-predial')


              @endif -->




        </ul>
    </div>
    <!-- Sidebar -->
</div>
