@extends('layouts.cursos.auth')

@section('content')
    @if ($message = Session::get('exito'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="container">
        <div class="mx-auto text-center">
            <h1 class="display-4 fw-normal">Mis Cursos</h1>
            <p class="text-muted fs-5">Listado de cursos en los que está matriculado</p>
        </div>

        <main>
            <?php
                $cont = 1;
            ?>
            @foreach ($cursos as $curso)
                @if ($cont == 1 )
                    <div class="row mb-3 text-center">
                @endif

                <div class="col-md-4">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3 bg-dark">
                            <h4 class="my-0 fw-normal">{{ $curso->nombre }}</h4>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('ver-curso', $curso->id) }}">
                                <button type="button" class="w-100 btn btn-lg btn-outline-primary">Entrar...</button>
                            </a>
                        </div>
                    </div>
                </div>

                @if ($cont == 3)
                    </div>
                    <?php
                        $cont = 1;
                    ?>
                @else
                    <?php
                        $cont++;
                    ?>
                @endif
            @endforeach
        </main>
    </div>
@endsection