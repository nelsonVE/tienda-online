@extends('layout.admin')

@section('titulo', 'Administración')

@section('contenido')

<div class="container bg-blanco p-3 pt-5 mt-5 radius" style="min-width: 411px;">
    <h2 class="text-center">Productos</h2><br><br>
    <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripción</th>
        <th scope="col">Precio (Bs.)</th>
        <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
        <tr>
        <th scope="row">{{ $producto->id }}</th>
        <td>{{ $producto->nombre }}</td>
        <td>{{ $producto->descripcion }}</td>
        <td>{{ $producto->precio }}</td>
        <td><button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection