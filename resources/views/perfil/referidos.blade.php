@extends('layout.base')

@section('titulo', 'Mis referidos')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 my-5 p-5 text-center" style="background-color: #fff; border-radius: 7px; color: #333;">
            <h1>Mis referidos</h1><hr>
            <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">Nombre y apellido</th>
                <th scope="col">Activo</th>
                <th scope="col">Compras</th>
                </tr>
            </thead>
            <tbody>
                @foreach($referidos as $referido)
                <tr>
                <td>{{ $referido->nombre }} {{ $referido->apellido }}</td>
                <td>
                @if($referido->activo)
                Sí
                @else
                No
                @endif
                </td>
                <td>
                {{ $compras->where('fk_usuario', $referido->id)->count() }}
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection