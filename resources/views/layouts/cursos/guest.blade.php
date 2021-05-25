<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LMS') }}</title>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
</head>
<body>

    @include('layouts.navs.guest')

    <main class="mt-5">
        @yield('content')
    </main>

    <footer class="bg-dark text-white mt-3 p-2">
        <div class="container">
            <div class="float-right d-none d-sm-block">
              <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; 2021 </strong>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{asset('adminlte')}}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('adminlte')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> --}}
    <!-- AdminLTE App -->
    {{-- <script src="{{asset('adminlte')}}/dist/js/adminlte.min.js"></script> --}}
    <!-- SweetAlert2 -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script> --}}
    <!-- Select2 -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script> --}}

    @yield('scripts')
    
</body>
</html>