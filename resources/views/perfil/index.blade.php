@extends('layout.base')

@section('titulo', 'Perfil')

@section('contenido')
<style>body{
    background-color: green;
}</style>
<div class="container mx-5" style="background-color: #fff; border-radius: 7px; color: #333;">
    <h3>Link de referido:</h3>
    {{ $url }}{{ $usuario->codigo }}
</div>
@endsection