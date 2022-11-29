<?php include 'funciones.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php parametrizar_plantilla('titulo_pag');
 ?></title>
	<meta name="viewport" content="<?php parametrizar_plantilla('viewport') ;?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobbile-web-app-capable" content="yes">
	<meta name="apple-mobbile-web-app-title" content="">

	<link rel="icon" href="images/logoGeometrico.jpg">	
	<!--=====================================
	Marcado HTML5
	======================================-->

	<meta name="title" content="USERS">
	<meta name="description" content= "<?php parametrizar_plantilla('description') ;?>">

	<meta name="keywords" content= "<?php parametrizar_plantilla('keywords');
	 ?>">
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
	<script src="js/materialize.min.js"></script>
<body>
	<!--=====================================
	  HEADER
	   ======================================-->
	<header class="navbar-fixed index-1">
		<nav class="pink lighten-4">
			<div class="container">
				<div class="nav-wrapper">
					<a href="#!" class="brand-logo left" >
						<img src="images/logoGalery.png" width="30%" id="logo">
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
		<!-- 	<div class="nav-wrapper">
						<li><a href="#!" class="brand-logo right">
						<img src="images/comprarLogo.png" width="25%">
							</a></li>
			</div> -->
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