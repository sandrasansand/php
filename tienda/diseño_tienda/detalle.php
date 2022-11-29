<?php
include ('conecta.php');
$con=conectar_db();
	$consulta= "select * from products where id=".$_POST['id'];
    $resultado= mysqli_query($con,$consulta);
?>


<HTML>
<head>
<link href="css/estilo.css" rel="stylesheet">

</head>
<body>

<div class="cabecera">Inicio		nosotros		contacto </div>

<div class="contenedor">

	<?php
	$con=conectar_db();
	$consulta= "select * from products";
    $resultado= mysqli_query($con,$consulta);

	    while ($filas=mysqli_fetch_array($resultado)){   //recorremos y nos guardamos todos los campos de la base, cada uno en una variable
			  $id =$filas ['id'];                       
			  $imagen =$filas['imagen'];
			  $nombre =$filas['nombre'];
			  $desc =$filas['descripcion'];
			  $precio =$filas['precio'];
			  $enStock =$filas['stock'];
			  $fecha =$filas['fecha'];

	?>


	<div class="cajaSola">
		<h2><?php echo $nombre?></h2>
		<img src="<?php echo $imagen ?>" width="100" >
		<p>  <?php echo $precio ?> </p>
		<a href="carrito.php"> <img name="carrito" src="imagenes/carrito2.png" id="productos"alt="" /></a>
		
		
	</div>
	
	<div class="cajaDes">
	<p><h3>Descripción </h3></p>
	<p> <?php echo $desc ?> </p>
	
	</div>
	<?php
		}
		?>
		
</div>

</body>
</html>