@extends('layouts.cursos.auth')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h2 class="text-center">Curso: {{ $curso->nombre }}</h2>
            <h3 class="text-center">Unidad: {{ $unidad->nombre }}</h3>
            <h4 class="text-center">Lección: {{ $leccion->nombre }}</h4>
            <p class="m-5">{{ $leccion->texto }}</p>
            <div class="d-flex justify-content-center pb-3">
                <iframe width="560" height="315" src="{{ $leccion->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-2 text-muted">
            <h6>{{ $curso->nombre }}</h6>
            <div class="progress mx-2">
                <div class="progress-bar" role="progressbar" style="width: {{ $por_ava }}%" aria-valuenow="{{ $por_ava }}" aria-valuemin="0" aria-valuemax="100">{{ $por_ava }}%</div>
            </div>
            <hr>
            @foreach ($unidades as $u2)
                @if ($unidad->curso_id == $curso->id)
                    <p>{{ $unidad->nombre }}</p>
                    @foreach ($leccionesAll as $l2)
                        @if ($leccion->unidad_id == $u2->id)
                            <p class="ml-3">{{ $l2->nombre }}
                                @foreach ($avances as $avance)
                                    @if ($avance->leccion_id == $l2->id)
                                        <span class="badge rounded-pill bg-success">
                                            <i class="fas fa-check fa-xs"></i>
                                        </span>
                                        @break
                                    @endif
                                @endforeach
                            </p>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>
    </div>
@endsection