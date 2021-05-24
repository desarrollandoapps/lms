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
      <ul class="navbar-nav ml-4">
        <li>
          @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
          @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Iniciar sesión</a>

            @if (Route::has('register'))
              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Crear cuenta</a>
            @endif
          @endauth
        </li>
      </ul>
    </div>
  </div>
</nav>

{{-- <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>



    <!-- SEARCH FORM -->
    <form class="form-inline ml-3 ml-auto" @yield('hidden-search')>
      <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" name="buscar" placeholder="Buscar" aria-label="Search" value="{{$query ?? ''}}">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    
  </nav> --}}