@extends('layout.admin')

@section('titulo', 'Administración')

@section('contenido')

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 p-5" style="background-color: #fff; border-radius: 7px; color: #333;">
            <h2 class="text-center">Edición de usuario ID {{ $usuario->id }}</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div><br />
            @endif
            <hr>
            <h5 class="text-center">Por favor rellene los campos a continuación:</h5>
            @if(!$usuario->email_verified_at)
            <small class="form-text text-muted text-center alert-danger p-1">¡Este usuario aún no ha verificado su email!</small>
            @endif
            <br>
            <form action="{{ url('/admin/usuarios') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $usuario->id }}">
                <div class="form-group">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre del usuario" value="{{ $usuario->nombre }}" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="apellido" placeholder="Apellido del usuario" value="{{ $usuario->apellido }}" required>
                </div>
                <div class="form-group">
                    <small class="form-text text-muted">Permisos del usuario:</small>
                    <select class="form-control" name="rol">
                        @foreach($roles as $rol)
                            @if($rol->id == $usuario->rol)
                            <option selected value="{{ $rol->id }}">{{ $rol->nombre }}</option>
                            @else
                            <option value="{{ $rol->id }}">{{ $rol->nombre }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" readonly placeholder="E-mail del usuario" value="{{ $usuario->email }}" required>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Editar usuario</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

@endsection