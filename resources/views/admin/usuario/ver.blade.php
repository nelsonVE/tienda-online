@extends('layout.admin')

@section('titulo', 'Administración')

@section('contenido')

<div class="container bg-blanco p-3 pt-5 mt-5 radius" style="min-width: 411px;">
    <h2 class="text-center">Usuarios</h2><br><br>
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
        <td><button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection