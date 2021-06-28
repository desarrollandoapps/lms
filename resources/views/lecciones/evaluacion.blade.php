@extends('layouts.cursos.auth')

@section('content')
<div class="row">
    <div class="col-md-10">
        <h2 class="text-center">Curso: {{ $curso->nombre }}</h2>
        <h3 class="text-center">Unidad: {{ $unidad->nombre }}</h3>
        <h4 class="text-center">Lección: {{ $leccion->nombre }}</h4>
        <h4 class="text-center">EVALUACIÓN</h4>
        <p class="ml-4 pt-5 pb-3">{{ $evaluacion->descripcion }}</p>
        <form action="{{ route('evaluar') }}" class="ml-4 pb-3" method="POST">
            @csrf
            @method('POST')
            <input type="hidden" name="leccion" value="{{ $leccion->id }}">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="respuesta" id="r1" value="1">
                <label class="form-check-label" for="r1">
                    {{ $evaluacion->respuesta1 }}
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="respuesta" id="r2" value="2">
                <label class="form-check-label" for="r2">
                    {{ $evaluacion->respuesta2 }}
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="respuesta" id="r3" value="3">
                <label class="form-check-label" for="r3">
                    {{ $evaluacion->respuesta3 }}
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="respuesta" id="r4" value="4">
                <label class="form-check-label" for="r4">
                    {{ $evaluacion->correcta }}
                </label>
            </div>
            <button class="btn btn-primary mt-3" type="submit">Enviar respuesta</button>
        </form>
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