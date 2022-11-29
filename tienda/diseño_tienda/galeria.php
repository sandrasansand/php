<?php
include ('conecta.php');

?>

<HTML>
<head>
<link href="css/estilo.css" rel="stylesheet">

</head>
<body>

<div class="cabecera">Inicio		nosotros		contacto
<div class="carrito"> <img src="imagenes/carro.png"> </div>
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
			  $Stock =$filas['stock'];
			  $fecha =$filas['fecha'];

	?>


	<div class="caja">
		<h2><?php echo $nombre?></h2>
		<img src="<?php echo $imagen ?>" width="100" height="90">
		<p><?php echo $precio?> </p>
		<form action="detalle.php" method="post" name="detalle">
			<input type="hidden" name="id" value="<?php echo $id?>" />
			<input type="submit" class="btn" value="detalle"/>
		</form>
	</div>
	<?php
		}
		?>
		
</div>

</body>
</html>