<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>{{ $titulo_largo }} - @yield('titulo')</title>
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-negro">
	    <a href="/" class="navbar-brand">{{ $titulo_corto }}</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar6">
	        <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="navbar-collapse collapse justify-content-stretch" id="navbar6">
	        <ul class="navbar-nav">
	            <li class="nav-item active">
	                <a class="nav-link" href="{{ url('/') }}">Inicio</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="{{ url('/productos') }}">Productos</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="{{ url('/top') }}">Top 100</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="{{ url('/acerca') }}">Acerca de</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="{{ url('/contactos') }}">Contacto</a>
	            </li>
	        </ul>
	        <ul class="navbar-nav ml-auto">
			@if(session()->has('user_id'))
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Bienvenido, {{ session()->get('user_name') }}
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{ url('/usuario/perfil') }}">Ver perfil</a>
					<a class="dropdown-item" href="{{ url('/usuario/referidos') }}">Mis referidos</a>
					@if(session()->get('user_type') == 2)
					<a class="dropdown-item" href="{{ url('/admin') }}">Panel administrativo</a>
					@endif
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
	        </ul>
	    </div>
	</nav>

	@section('contenido')
	@show

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center pt-3 fixed-bottom bg-negro">
				<p class="text-white">Todos los derechos reservados&copy;</p>
			</div>
		</div>
	</div>

</body>

<script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</html>