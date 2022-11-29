<!DOCTYPE html>
<html>
<head>
	<title>probando</title>
</head>
<body>
	<?php 
	include_once 'class.videoclub.php';
	$videoclub = new Videoclub('VideoEsfera');
//clase Pelicula NUEVOS CLIENTES
	$cliente1 = new Cliente('Faustino');
	$pelicula1 = new Pelicula('Nanook el esquimal', 'Castellano','1 hora', 'Documental');
	$videoclub->addCliente($cliente1);
	$videoclub->addProducto($pelicula1);
	$videoclub->alquilar($cliente1,$pelicula1);
	$cliente3 = new Cliente('Alba');
	$pelicula2 = new Pelicula('Manhatan', 'Castellano','1 hora', 'Comedia');
	$videoclub->addCliente($cliente3);
	$videoclub->addProducto($pelicula2);
	$videoclub->alquilar($cliente3,$pelicula2);
	echo "IMPRIMIENDO  PELICULAS:<br />";
	$pelicula1->imprimirDatos();
	$pelicula2->imprimirDatos();

//Clase JUEGO
	$cliente4= new Cliente('Lucas');
	$juego1= new Juego('Fifa','Playstation','Lúdico');
	$videoclub->addCliente($cliente4);
	$videoclub->addProducto($juego1);
	$videoclub->alquilar($cliente4,$juego1);
	echo "IMPRIMIENDO  JUEGOS:<br />";
	$juego1->imprimirDatos();
	echo "<br/>";

//Clase CD cliente 2 con 2 productos
	$cliente2= new Cliente('Sandra');
	$cd1 = new Cd('Barricada', '60 mnt','post-rock');
	$videoclub->addCliente($cliente2);
	$videoclub->addProducto($cd1);
	$videoclub->alquilar($cliente2,$cd1);
	echo "IMPRIMIENDO  CDS:<br />";
	$cd1->imprimirDatos();
	echo "---------------------------------------------------</br>";
	$pelicula3= new Pelicula('Interestelar','castellano','120m','Ciencia-Ficción');
	$videoclub->addProducto($pelicula3);
	$videoclub->alquilar($cliente2,$pelicula3);

//mostrar alquileres
	echo "<h1><b>IMPRIMIENDO  DATOS DEL VIDEOCLUB </b></h1>";
	echo "<b>IMPRIMIENDO PRODUCTOS ALQUILADOS </b> <br/>";
	echo "<b>IMPRIMIENDO  CLIENTE Y PRODUCTOS </b>";
	echo "<pre>";
	echo ".........................................................\n";
	echo $videoclub;
	echo "\t........................................\n";
	echo "</pre>";
	echo "<br />";

//LISTADO CLIENTES
	echo "<pre>";
	echo "\t........................................\n";
	$clientes =$videoclub->getClientes();
	echo '<p><b> Lista de clientes </p></b>';
	foreach ($clientes as $cliente) {
		echo $cliente->getNombre(). '<br/>';
	}
	echo "\t........................................\n";
	echo "</pre>";
	echo "<br />";

//LISTADO PRODUCTOS
	echo "<pre>";
	echo "\t........................................\n";
	$productos =$videoclub->getProductos();
	echo '<p><b> Lista de productos: </p></b>';
	foreach ($productos as $producto ) {
		echo $producto->getNombre().'<br/>';
	}
	echo "\t........................................\n";
	echo "</pre>";
	echo "<br />";

//CLIENTE 1 y 2 __toString
	echo "-----------------------------------------------------------</br>";
	echo "<b>IMPRIMIENDO DATOS CLIENTE 1 y CLIENTE 2  __toString </b>";
	echo "<pre>";
	echo ".........................................................\n";
	echo $cliente1;
	echo "\t........................................\n";
	echo "\t........................................\n";
	echo $cliente2;
	echo "\t........................................\n";
	echo "</pre>";
	echo "<br />";

//JUEGO __toString
	echo "<p><b>IMPRIMIENDO  DATOS JUEGO __toString: </b></p>";
	echo "<pre>";
	echo "\t........................................\n";
	echo $juego1;
	echo "\t........................................\n";
	echo "</pre>";
	echo "<br />";

//CD __toString
	echo "<p><b>IMPRIMIENDO  DATOS CD __toString: </b></p>";
	echo "<pre>";
	echo "\t........................................\n";
	echo $cd1;
	echo "\t........................................\n";
	echo "</pre>";
	echo "<br />";

//PELICULA __toString
	echo "<p><b>IMPRIMIENDO  DATOS PELICULA __toString: </b></p>";
	echo "<pre>";
	echo "\t........................................\n";
	echo $pelicula1;
	echo "\t........................................\n";
	echo "\t........................................\n";
	echo $pelicula2;
	echo "\t........................................\n";
	echo "</pre>";
	echo "<br/>";

//Metodo para saber si está disponible un Producto
	echo "<p><b>-----------  ¿Producto DISPONIBLE?  --------</p></b>";
	echo "<pre>";
	echo "\t........................................\n";
	$videoclub->estaAlquiladoProducto($pelicula1);
	echo "</pre>";
	echo "<br/>";
	?>
</body>
</html>

