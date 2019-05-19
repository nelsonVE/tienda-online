@extends('layout.admin')

@section('titulo', 'Administración')

@section('contenido')

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 p-5" style="background-color: #fff; border-radius: 7px; color: #333;">
            <h2 class="text-center">Edición de producto ID {{ $producto->id }}</h2>
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
            <h5 class="text-center">Por favor rellene los campos a continuación:</h5><br>
            <form action="/admin/productos" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $producto->id }}">
                <div class="form-group">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre del producto" value="{{ $producto->nombre }}" required>
                </div>
                <div class="form-group">
                <input type="text" class="form-control" name="descripcion" placeholder="Descripción del producto" value="{{ $producto->descripcion }}" required>
                </div>
                <div class="form-group">
                <input type="number" class="form-control" name="precio" min="1" placeholder="Precio del producto" value="{{ $producto->precio }}" required>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Editar producto</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

@endsection