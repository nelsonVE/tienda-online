<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Sistema de venta - @yield('titulo')</title>
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-negro">
	    <a href="/" class="navbar-brand">SVP</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar6">
	        <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="navbar-collapse collapse justify-content-stretch" id="navbar6">
	        <ul class="navbar-nav">
	            <li class="nav-item active">
	                <a class="nav-link" href="index">Inicio</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="productos">Productos</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="top">Top 100</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="acerca">Acerca de</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="contacto">Contacto</a>
	            </li>
	        </ul>
	        <ul class="navbar-nav ml-auto">
	            <li class="nav-item">
	                <a class="nav-link" href="ingresar">Ingresar</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link btn btn-success" href="registro">Registro</a>
	            </li>
	        </ul>
	    </div>
	</nav>

	@section('contenido')
	@show

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center pt-3 bg-negro">
				<p class="text-white">Todos los derechos reservados&copy;</p>
			</div>
		</div>
	</div>

</body>

<script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>