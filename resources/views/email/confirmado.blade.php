@extends('layout.base')

@section('titulo', 'Email verificado')

@section('contenido')
<style>body{
    background-color: #DEE4E7;
}</style>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 my-5 p-5 text-center alert-success" style="border-radius: 7px; color: #333;">
            <h1>El email ha sido confirmado exitosamente</h1> <br><br>
            <a href="{{ url('/ingresar') }}">Haz click aquí para ingresar al sistema</a>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection