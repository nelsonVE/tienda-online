@extends('layout.base')

@section('titulo', 'Perfil')

@section('contenido')
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