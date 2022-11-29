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
	<script src="js/materialize.min.js"></script>
<body>
	<!--=====================================
	  HEADER
	   ======================================-->
	<header class="navbar-fixed index-1">
		<nav class="pink lighten-5">
			<div class="container">
				<div class="nav-wrapper">
					<a href="#!" class="brand-logo left">
						<img src="images/logo.png" width="40">
					</a>
					<a href="#" data-target="nav-movil" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="#">Articulos</a></li>
						<li><a href="#!" class="waves-effect waves-light btn  pink accent-2">Registro</a></li>
					</ul>
				</div>
				
			</div>
		</nav>

		<ul class="sidenav" id="nav-movil">
			<li><a href="#">Articulos</a></li>
		    <li><a href="#" class="waves-effect waves-light btn  pink accent-2">Registro</a></li>
		</ul>
	</header>

	<!--=====================================
	   PROFILE
	   ======================================-->
	<main role="main" class="user-profile">
		<div class="parallax-container profile">
	      <div class="parallax">
	      	<img src="images/hero-profile2.jpg">

	      </div>
	      	<div class="content-parallx center">
	      		<figure>
	      			<img src="images/person.png" width="100" class="circle-img">
	      		</figure>
	      		<h2 class="name-user">
	      			Jhon Doe
	      		</h2>
	      	</div>
	    </div><!-- End parallax -->

	    <div class="container">
	    	<article class="center">
	    		<h3>Sobre mi</h3>
	    		<figcaption>
	    			Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus fuga laboriosam, voluptatem dolore tempore quae ipsam cum quisquam doloribus quam optio, unde, reiciendis maiores et nulla iusto quidem quod. Aliquid!
	    		</figcaption>
	    	</article>


	    	<div class="articles-post-user-profile">
	    		<div class="row">
	    			<div class="col s12 m4">
	    				<div class="card">
	    					<div class="card-image scalar">
	    						<a href="#!">
		    						<img src="images/hero.jpg" height="150px">
	    							
	    						</a>

	    					</div>
	    					<div class="card-content">
	    						<div class="ahutor right">
		    						<a href="#!">
		    							<img src="images/person.png" width="60" class="circle-imgn">
		    						</a>
	    							
	    						</div><!-- End ahitor -->
	    						<a href="#!">
	    						 <span class="card-title">Nuevo articulo</span>
	    							
	    						</a>
	    						<p>I am a very simple card. I am good at containing small bits of information.
	    						I am convenient because I require little markup to use effectively.</p>

	    						<div class="card-footer">
	    							<a href="#!" class="tooltipped" data-position="top" data-tooltip="Comentarios: 200">
	    								<i class="material-icons">comment</i>
	    							</a>
	    							
	    							<a href="#!" class="tooltipped" data-position="top" data-tooltip="Visitas: 1500">
	    								<i class="material-icons">group</i>
	    							</a>
	    						</div>
	    					</div>
	    				</div><!-- End card -->
	    			</div>
	    			<div class="col s12 m4">
	    				<div class="card">
	    					<div class="card-image scalar">
	    						<a href="#!">
		    						<img src="images/hero.jpg"height="150px">
	    							
	    						</a>

	    					</div>
	    					<div class="card-content">
	    						<div class="ahutor right">
		    						<a href="#!">
		    							<img src="images/person.png" width="60" class="circle-imgn">
		    						</a>
	    							
	    						</div><!-- End ahitor -->
	    						<a href="#!">
	    						 <span class="card-title">Nuevo articulo</span>
	    							
	    						</a>
	    						<p>I am a very simple card. I am good at containing small bits of information.
	    						I am convenient because I require little markup to use effectively.</p>

	    						<div class="card-footer">
	    							<a href="#!" class="tooltipped" data-position="top" data-tooltip="Comentarios: 200">
	    								<i class="material-icons">comment</i>
	    							</a>
	    							
	    							<a href="#!" class="tooltipped" data-position="top" data-tooltip="Visitas: 1500">
	    								<i class="material-icons">group</i>
	    							</a>
	    						</div>
	    					</div>
	    				</div><!-- End card -->
	    			</div>
	    			<div class="col s12 m4">
	    				<div class="card">
	    					<div class="card-image scalar">
	    						<a href="#!">
		    						<img src="images/hero.jpg" height="150px">
	    							
	    						</a>

	    					</div>
	    					<div class="card-content">
	    						<div class="ahutor right">
		    						<a href="#!">
		    							<img src="images/person.png" width="60" class="circle-imgn">
		    						</a>
	    							
	    						</div><!-- End ahitor -->
	    						<a href="#!">
	    						 <span class="card-title">Nuevo articulo</span>
	    							
	    						</a>
	    						<p>I am a very simple card. I am good at containing small bits of information.
	    						I am convenient because I require little markup to use effectively.</p>

	    						<div class="card-footer">
	    							<a href="#!" class="tooltipped" data-position="top" data-tooltip="Comentarios: 200">
	    								<i class="material-icons">comment</i>
	    							</a>
	    							
	    							<a href="#!" class="tooltipped" data-position="top" data-tooltip="Visitas: 1500">
	    								<i class="material-icons">group</i>
	    							</a>
	    						</div>
	    					</div>
	    				</div><!-- End card -->
	    			</div>
	    		</div>
	    	</div>
	    </div>
	</main>
	


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
