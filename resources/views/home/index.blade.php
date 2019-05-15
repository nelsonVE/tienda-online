@extends('layout.base')

@section('titulo', 'Inicio')

@section('menu')

@if($logged)
	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Bienvenido, {{ $usuario->nombre }}
		</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		<a class="dropdown-item" href="{{ url('/usuario/perfil') }}">Ver perfil</a>
		<a class="dropdown-item" href="{{ url('/usuario/referidos') }}">Mis referidos</a>
		<div class="dropdown-divider"></div>
		<a class="dropdown-item" href="{{ url('/usuario/salir') }}">Salir</a>
		</div>
	</li>
@else
	<li class="nav-item">
		<a class="nav-link" href="ingresar">Ingresar</a>
	</li>
	<li class="nav-item">
		<a class="nav-link btn btn-success" href="registro">Registro</a>
	</li>
@endif

@endsection

@section('contenido')
<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 py-5 text-center bg-negroclaro">
				<h1 class="text-white">¡Bienvenido a SVP!</h1><br>
				<h3 class="text-white">El único sitio en el que podrás ganar dinero vendiendo productos</h3>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row text-center pb-5">
			<div class="col-sm-12 col-xs-12 col-md-3 px-4 mt-5">
				<i class="fas fa-sitemap" style="font-size: 5em;"></i>
				<br><br><h2>Título</h2><hr>
				<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			<div class="col-sm-12 col-xs-12 col-md-3 px-4 mt-5">
				<i class="fas fa-sitemap" style="font-size: 5em;"></i>
				<br><br><h2>Título</h2><hr>
				<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			<div class="col-sm-12 col-xs-12 col-md-3 px-4 mt-5">
				<i class="fas fa-sitemap" style="font-size: 5em;"></i>
				<br><br><h2>Título</h2><hr>
				<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			<div class="col-sm-12 col-xs-12 col-md-3 px-4 mt-5">
				<i class="fas fa-sitemap" style="font-size: 5em;"></i>
				<br><br><h2>Título</h2><hr>
				<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
		</div>
	</div>

	<div class="container-fluid py-3 bg-gris">
		<h1 class="text-center">Acerca de nosotros</h1>
		<div class="row mt-4">
			<div class="col-md-2"></div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<img class="img-fluid" src="{{ asset('img/ad.jpg') }}" style="border-radius: 6px;"><br><br>
				<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipiscing elit, elementum lacinia justo tempor mi purus lectus, odio dignissim mollis ridiculus dictum quam. Fusce et tempor natoque cubilia non dignissim habitant, elementum morbi est pellentesque tortor nec nunc id, nisi inceptos posuere auctor facilisis viverra. Vivamus vestibulum cum erat ut cras pretium congue curabitur felis vulputate varius nisi bibendum sagittis convallis mi donec, platea commodo enim dignissim sed molestie fringilla mauris natoque elementum interdum rhoncus himenaeos senectus tempus fermentum.</p>

				<p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipiscing elit, elementum lacinia justo tempor mi purus lectus, odio dignissim mollis ridiculus dictum quam. Fusce et tempor natoque cubilia non dignissim habitant, elementum morbi est pellentesque tortor nec nunc id, nisi inceptos posuere auctor facilisis viverra. Vivamus vestibulum cum erat ut cras pretium congue curabitur felis vulputate varius nisi bibendum sagittis convallis mi donec, platea commodo enim dignissim sed molestie fringilla mauris natoque elementum interdum rhoncus himenaeos senectus tempus fermentum.</p>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 py-5 text-center">
				<h1>Contáctanos</h1><br>
				<h3>Ubícanos en nuestras distintas redes sociales</h3> <br><br>
				<i class="fab fa-whatsapp bg-whatsapp" style="font-size: 5em; margin-left: 30px;"></i>
				<i class="fab fa-instagram" style="font-size: 5em; margin-left: 30px;"></i>
				<i class="fab fa-facebook bg-facebook" style="font-size: 5em; margin-left: 30px;"></i>
				<i class="fab fa-twitter bg-twitter" style="font-size: 5em; margin-left: 30px;"></i>
			</div>
		</div>
	</div>
@endsection