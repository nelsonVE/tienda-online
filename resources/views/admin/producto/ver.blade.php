@extends('layout.admin')

@section('titulo', 'Administración')

@section('contenido')

<div class="container bg-blanco p-3 pt-5 my-5 radius" style="min-width: 411px;">
    <h2 class="text-center">Productos</h2> <br>
    @if($codigo == 202)
    <div class="alert alert-success text-center">
        <strong>Producto editado con éxito</strong>
    </div><br><br>
    @endif
    @if($codigo == 203)
    <div class="alert alert-success text-center">
        <strong>Producto creado con éxito</strong>
    </div><br><br>
    @endif
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
        <td><a class="nav-link btn btn-success" href="{{ url('/admin/producto/editar/'.$producto->id) }}"><i class="fas fa-edit"></i></a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection