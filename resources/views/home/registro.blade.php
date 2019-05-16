@extends('layout.base')

@section('titulo', 'Regístrate')

@section('contenido')
<div class="container-fluid py-5" style="background-color: #DEE4E7">
		<div class="container-fluid text-center">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4 p-5" style="background-color: #fff; border-radius: 7px; color: #333;">
					<h2>Regístrate</h2>
					Por favor llena los campos solicitados
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
					<form  action="{{ url('/usuario') }}" method="post">
					  @csrf
						@if(isset($referencia))
						Referido ID: {{ $referencia }}
						<input name="referencia" type="hidden" value="{{ $referencia }}">
						@endif
						<div class="form-group">
					  	<small class="form-text text-muted">Por favor ingresa tu nombre real</small>
					    <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre" required>
					  </div>
					  <div class="form-group">
					  	<small class="form-text text-muted">Por favor ingresa tu apellido real</small>
					    <input name="apellido" type="text" class="form-control" id="apellido" placeholder="Apellido" required>
					  </div>
					  <div class="form-group">
					  	<small class="form-text text-muted">Ingresa tu dirección de correo electrónico</small>
					    <input name="email" type="email" class="form-control" id="email" placeholder="Dirección de correo electrónico" required>
					  </div>
					  <div class="form-group">
					  	<small class="form-text text-muted">Ingresa una contraseña que contenga 8 caracteres alfanuméricos</small>
					    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" required>
					  </div>
					  <div class="form-group">
					  	<small class="form-text text-muted">Por favor repita la contraseña</small>
					    <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1" placeholder="Repita la contraseña" required>
					  </div>
					  <div class="form-group form-check">
					    <input name="acepto" type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1">Acepto los términos y condiciones</label>
					  </div> <br>
					  <button type="submit" class="btn btn-success" style="width: 100%;">Registrarme</button>
					</form>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</div>
@endsection