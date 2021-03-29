@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Usuarios')])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if ( $mensaje = Session::get( 'exito' ) ) 
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{$mensaje}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                        </div>
                    @endif
                <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title ">{{ __('Usuarios') }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>E-mail</th>
                                        {{-- <th>Rol</th> --}}
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        {{-- <td>{{implode(',' ,$user->roles()->get()->pluck('nombre')->toArray())}}</td> --}}
                                        <td class="td-actions text-left">
                                            <a href="{{route('users.edit', $user->id)}}">
                                                <button type="button" class="btn btn-success btn-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </a>
                                            {{-- <form action="{{route('users.destroy', $user->id)}}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" rel="tooltip" class="btn btn-danger btn-circle" onclick="return confirm('¿Confirma la eliminación de la transferencia de conocimiento?')"><i class="fas fa-trash"></i></button>
                                            </form> --}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection