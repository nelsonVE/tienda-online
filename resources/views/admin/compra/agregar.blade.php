@extends('layout.admin')

@section('titulo', 'Administración')

@section('contenido')
<script>
function actualizarTotal(){
	var producto= $("#producto").val();
	var cantidad = $("#cantidad").val();

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    jQuery.ajax({
        url: "{{ url('/admin/compra/get_total') }}",
        method: 'post',
        data: {
            producto: jQuery('#producto').val(),
            cantidad: jQuery('#cantidad').val(),
        },
        success: function(result){
            $('#total').val(result.success);
        }});

	return false;
}

</script>
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 p-5" style="background-color: #fff; border-radius: 7px; color: #333;">
            <h2 class="text-center">Realizar compra</h2>
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
            <h5 class="text-center">Por favor rellene los campos a continuación:</h5>
            <br>
            <form action="{{ url('/admin/compra/agregar') }}" method="post">
                @csrf
                <div class="form-group">
                    <small class="form-text text-muted">Usuario:</small>
                    <select class="form-control" name="usuario">
                        @foreach($usuarios as $usuario)
                            <option value="{{ $usuario->id }}">{{ $usuario->nombre }} {{ $usuario->apellido }} ID:{{ $usuario->id }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <small class="form-text text-muted">Producto a comprar:</small>
                    <select class="form-control" name="producto" id="producto" onchange="actualizarTotal();">
                        @foreach($productos as $producto)
                            <option data-price="{{ $producto->precio }}" value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                <small class="form-text text-muted">Cantidad a comprar:</small>
                    <input type="number" class="form-control" id="cantidad" onchange="actualizarTotal();" name="cantidad" placeholder="Cantidad a comprar" value="1" min="1" required>
                </div>
                <div class="form-group text-center">
                <small class="form-text text-muted">Monto total:</small>
                    <input type="number" class="form-control text-center" name="total" id="total" placeholder="Total a pagar"
                    @if($productos[0])
                    value="{{ $productos[0]->precio }}"
                    @endif
                    style="font-weight: bold; font-size: 1.5em;" readonly>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Realizar compra</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
@endsection