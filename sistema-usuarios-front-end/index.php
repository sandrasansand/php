<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobbile-web-app-capable" content="yes">
	<meta name="apple-mobbile-web-app-title" content="">

	<link rel="icon" href="images/logo.png">	
	<!--=====================================
	Marcado HTML5
	======================================-->

	<meta name="title" content="USERS">
	<meta name="description" content="Administración de usuarios">
	<meta name="keyword" content="suers, perfil, web"> 
	<!--=====================================
	   CSS STYLES
	   ======================================-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/main.css">

	<!--=====================================
	   JAVASCRIPT SCRIPTS
	   ======================================-->
	<script type="js/jquery-3.5.1.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<body>
	<!--=====================================
	  HEADER
	   ======================================-->
	<header class="navbar-fixed index-1">
		<nav class="pink lighten-5">
			<div class="container">
				<div class="nav-wrapper">
					<a href="#!" class="brand-logo left">
						<img src="images/logoGr.gif" width="70">
					</a>
					<a href="#" data-target="nav-movil" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="#">Articulos</a></li>
						<li><a href="#">Articulos</a></li>
						<li><a href="#">Articulos</a></li>
						<li><a href="#!" class="waves-effect waves-light btn  pink accent-2">Registro</a></li>
					</ul>
				</div>
				
			</div>
		</nav>

		<ul class="sidenav" id="nav-movil">
			<!-- <li><a href="#">Articulos</a></li> -->
			<div class="card">
	    					<div class="card-image scalar">
	    						<a href="#!">
		    						<img src="images/hero.jpg">
	    							
	    						</a>
	    	</div>
		    <li><a href="#" class="waves-effect waves-light btn  pink accent-2">Registro</a></li>
		    <li>
		    <a href="">
		    <i class="material-icons">fingerprint</i>
		    Productos
		    </a>
			</li>
			 <li>
		    <a href="">
		    <i class="material-icons">fingerprint</i>
		    Categorias
		    </a>
			</li>
			<li>
		    <a href="">
		    <i class="material-icons">fingerprint</i>
		    Blog
		    </a>
			</li>
			<li>
				<div class="divider"></div>
			</li>
			 <li>
		    <a href="">
		    <i class="material-icons">fingerprint</i>
		    Ventas
		    </a>
			</li>
		</ul>
	</header>

	<!--=====================================
	   HERO
	   ======================================-->

	<section class="section-hero">
		<div class="hero">
			<div class="container">
				<div class="container-hero">
					<h2 class="title-hero">
						Bienvenido al sistema de usuarios
					</h2>
					<p>No estás registrado aún que esperas para ingresar y disfrutar</p>
					<a href="#!" class="waves-effect waves-light btn   pink accent-2">Registro</a>
					
				</div>
			</div>
		</div>
	</section>

 <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
	<footer class="black">
		<div class="container">
			<p class="copy">
				&copy; Todos los derechos reservados - sistema de ususarios
			</p>
		</div>
	</footer>


	<div class="scrolltop scrolltop-dark"></div>
 
	<script src="js/app.js"></script>
</body>
</html>
