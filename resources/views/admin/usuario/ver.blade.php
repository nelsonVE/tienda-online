@extends('layout.admin')

@section('titulo', 'Administración')

@section('contenido')

<div class="container bg-blanco p-3 pt-5 mt-5 radius" style="min-width: 411px;">
    <h2 class="text-center">Usuarios</h2><br>
    @if($codigo == 202)
    <div class="alert alert-success text-center">
        <strong>Usuario editado con éxito</strong>
    </div><br><br>
    @elseif($codigo == 404)
    <div class="alert alert-danger text-center">
        <strong>No se ha encontrado el usuario en nuestra base de datos</strong>
    </div><br><br>
    @endif
    <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre y apellido</th>
        <th scope="col">Activo</th>
        <th scope="col">Referido</th>
        <th scope="col">Rol</th>
        <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
        <th scope="row">{{ $usuario->id }}</th>
        <td>{{ $usuario->nombre }} {{ $usuario->apellido }}</td>
        <td>
        @if($usuario->activo)
        Sí
        @else
        No
        @endif
        </td>
        <td>
        @if($usuario->referencia)
        ID: {{ $usuario->referencia }}
        @else
        No
        @endif
        </td>
        <td>{{ $roles[$usuario->rol-1]->nombre }}</td>
        <td><a href="{{ url('/admin/usuario/editar/'.$usuario->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection