<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-5">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <img src="{{asset('images')}}/icono.png"
           alt="Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8; width: 15%">
      <span class="brand-text font-weight-light">{{ __('App name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div>
          @guest
          @else
            <i class="nav-icon fas fa-user fa-2x"></i>
          @endguest
        </div>
        <div class="info w-100">
          <div class="mx-auto">
            @guest
              <a class="btn btn-outline-primary btn-sm btn-block" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
            @else
              {{ Auth::user()->name }}
              <div class="float-right">
                <a class="btn btn-outline-primary btn-sm" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                    Salir
                </a>
              </div>
              <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">
                  @csrf
              </form>
            @endguest
            </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        @auth
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              @foreach ($unidades as $unidad)
              <li class="nav-item has-treeview {{ ($unidad->curso_id == $id) ? ' menu-open' : ''}} ">
                <a href="#" class="nav-link {{ ($unidad->curso_id == $id) ? ' active' : '' }}">
                  <p class="text-wrap mr-1">
                    {{ $unidad->nombre }}
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  @foreach ($lecciones as $l)
                    @if ($l->unidad_id == $unidad->id)
                        <li class="nav-item">
                        <a href="{{ route('ver-leccion', $l->id) }}" class="nav-link{{ $activePage == 'cursos' ? ' active' : '' }}">
                            <p class="ml-1 text-wrap">{{ $l->nombre }}</p>
                        </a>
                        </li>
                    @endif
                  @endforeach
                </ul>
              </li>
              @endforeach
            <hr>
            <li class="nav-item">
              <a href="{{ route('users.index') }}"" class="nav-link{{ $activePage == 'users' ? ' active' : '' }}">
                <i class="fas fa-users nav-icon"></i>
                <p>Usuario</p>
              </a>
            </li>
          </ul>
        @endauth
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
