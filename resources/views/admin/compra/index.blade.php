@extends('layout.admin')

@section('titulo', 'Administración')

@section('contenido')

<div class="container bg-blanco p-3 pt-5 my-5 radius" style="min-width: 411px;">
    <h2 class="text-center">Compras</h2> <br>
    @if($codigo == 202)
    <div class="alert alert-success text-center">
        <strong>Compra realizada con éxito</strong>
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
        <th scope="col">Comprador</th>
        <th scope="col">Producto</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Total</th>
        <th scope="col">Fecha de compra</th>
        </tr>
    </thead>
    <tbody>
        @foreach($compras as $compra)
        <tr>
        <th scope="row">{{ $compra->id }}</th>
        @foreach($usuarios as $usuario)
        @if($usuario->id == $compra->fk_usuario)
        <td>{{ $usuario->nombre }} {{ $usuario->apellido }} ID:{{ $usuario->id }}</td>
        @break
        @endif
        @endforeach
        @foreach($productos as $producto)
        @if($producto->id == $compra->fk_producto)
        <td>{{ $producto->nombre }}</td>
        @break
        @endif
        @endforeach
        <td>{{ $compra->cantidad }}</td>
        <td>{{ $compra->total }}</td>
        <td>{{ $compra->fecha_compra }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection