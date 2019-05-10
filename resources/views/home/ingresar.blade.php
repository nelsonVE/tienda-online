@extends('layout.base')

@section('titulo', 'Ingresar')

@section('contenido')
<div class="container-fluid py-5 bg-gris">
		<div class="container-fluid text-center">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4 p-5" style="background-color: #fff; border-radius: 7px; color: #333;">
					<h2>Ingresar</h2>
					Por favor inserta tus datos para ingresar al sistema
					<hr> <br>
					<form>
					  <div class="form-group">
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Dirección de correo electrónico" required>
					    
					  </div>
					  <div class="form-group">
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" required>
					  </div>
					  <div class="form-group form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1">Mantener sesión</label>
					  </div> <br>
					  <button type="submit" class="btn btn-primary" style="width: 100%;">Ingresar</button>
					</form>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>

		<div class="container-fluid text-center my-5">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4 p-5" style="background-color: #fff; border-radius: 7px; color: #333;">
					<h2>¿No estás registrado?</h2><hr>
					Regístrate ahora y empieza a ganar dinero con nosotros, es rápido, sencillo y eficaz.
					No esperes más, haz click en el enlace de abajo e inicia tu registro de manera gratuita.
					<br><br>
					<button class="btn btn-success" style="width: 100%;">Registrarme</button>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</div>
@endsection