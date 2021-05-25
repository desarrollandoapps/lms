<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
  <div class="container">
    <a class="navbar-brand" href="#">{{ config('app.name', 'LMS') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Cursos</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Buscar...">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
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
    </div>
  </div>
</nav>