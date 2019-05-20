@extends('layout.base')

@section('titulo', 'Perfil')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 my-5 p-5 text-center" style="background-color: #fff; border-radius: 7px; color: #333;">
            <h1>Perfil de usuario</h1><hr>
            <p style="font-size: 1.5em; line-height: 25px;">{{ $usuario->nombre }} {{ $usuario->apellido }}</p>
            <p style="font-size: 1.5em; line-height: 25px;">Estado:@if($usuario->activo) <i class="alert alert-success" style="padding: 2px 10px 2px 10px;">Activo</i> @else <i class="alert alert-danger" style="padding: 2px 10px 2px 10px;">Inactivo</i> @endif</p>
            <p style="font-size: 1.5em; line-height: 25px;">Total de referidos: {{ $total_referidos }}</p>
            <p style="font-size: 1.5em; line-height: 25px;">Referidos activos: {{ $referidos_activos }}</p>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 my-5 p-5 text-center" style="background-color: #fff; border-radius: 7px; color: #333;">
            <h3>Link de referido:</h3>
            <p class="text-right"><a href="#" onclick="copiarLink();return false;">Copiar enlace <i class="fas fa-copy"></i></a></p>
            <input type="text" class="form-control" id="link_referido" value="{{ url('/registro/'.$usuario->codigo) }}" readonly>
            
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<script>
function copiarLink() {
  var copyText = document.getElementById("link_referido");
  copyText.select();
  document.execCommand("copy");
  alert("Enlace copiado al portapapeles");
}
</script>
@endsection