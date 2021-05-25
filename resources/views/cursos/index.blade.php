@extends('layouts.cursos.guest')

@section('content')
<div class="sticky-top float-right mr-5">
    <div class="card shadow" style="width: 18rem;">
        <div class="card-body">
            {{-- <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
            <a href="{{ route('inscribirEstudiante', $curso->id) }}" class="btn btn-primary btn-block rounded-pill">Inscríbete</a>
        </div>
    </div>
</div>
    <div class="container-fuid bg-light">
        <div class="container">
            <h1 class="font-weight-bold my-3">Curso: {{ $curso->nombre }}</h1>
            <iframe width="560" height="315" src={{ $curso->video }} title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <div class="container">
        <h2 class="my-3">Contenido</h2>
        <div class="accordion" id="accordionUnidades">
            @foreach ($unidades as $unidad)
                <div class="card">
                    <div class="card-header" id="heading{{ $unidad->id }}">
                        <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{ $unidad->id }}" aria-expanded="true" aria-controls="collapse{{ $unidad->id }}">
                            {{ $unidad->nombre }}
                        </button>
                        </h2>
                    </div>
                
                    <div id="collapse{{ $unidad->id }}" class="collapse show" aria-labelledby="heading{{ $unidad->id }}" data-parent="#accordionUnidades">
                        <div class="card-body text-muted">
                            <ul class="list-group list-group-flush">
                                @foreach ($lecciones as $leccion)
                                    @if ($leccion->unidad_id == $unidad->id)
                                        <li class="list-group-item">
                                            <i class="far fa-play-circle mr-2"></i>
                                            {{ $leccion->nombre }}
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
          </div>
    </div>
@endsection