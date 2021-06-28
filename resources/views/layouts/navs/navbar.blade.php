<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <a href="{{ route('curso-auth') }}" class="nav-link">Mis cursos</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    {{-- <form class="form-inline ml-3 ml-auto" @yield('hidden-search')>
      <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" name="buscar" placeholder="Buscar" aria-label="Search" value="{{$query ?? ''}}">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}
    <ul class="navbar-nav ml-auto">
      @auth
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
        </li>
      @else
        <li class="nav-item">
          <a href="{{ route('login') }}" class="nav-link font-weight-bold">Iniciar sesión</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('register') }}" class="nav-link">Crear cuenta</a>
        </li>
      @endauth
    </ul>
  </nav>
  <!-- /.navbar -->