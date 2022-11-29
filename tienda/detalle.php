<?php
include ('conecta.php');
$con=conectar_db();
	$consulta= ("select * from products where id=".$_POST['id']); //recojemoes por post el id, del form detalle
    $resultado= mysqli_query($con,$consulta);
?>


<?php include ('plantilla/head.php');?>

<div class="contenedor">

	<?php
	

	    while ($filas=mysqli_fetch_array($resultado)){   //recorremos y nos guardamos todos los campos de la base, cada uno en una variable
			  $id =$filas ['id'];                       
			  $imagen =$filas['imagen'];
			  $nombre =$filas['nombre'];
			  $desc =$filas['descripcion'];
			  $precio =$filas['precio'];
			  $stock =$filas['stock'];//añado sctock
			  $fecha =$filas['fecha'];

	?>


	<div class="cajaSola">
		<h2><?php echo $nombre?></h2>
		<img src="<?php echo $imagen ?>" width="200" height="200">
		<p>  <?php echo $precio ?> </p>
		<p> <?php echo  $stock?> </p> <!-- añado stock 27/01/2021 -->
	<!--	<a href="carrito.php"><img name="carrito" src="imagenes/carrito2.png" id="productos"alt="" /></a>  -->
		 <form id="compra" name="compra" method="post" action="carrito.php">
		    <input type="hidden" name="id_txt" value="<?php echo $id ?>"/>
    		<input type="hidden" name="nombre" value="<?php echo $nombre ?>"/>
			<input type="hidden" name="precio" value="<?php echo $precio ?>"/>
			<input type="hidden" name="stock" value="<?php echo $stock ?>"/> <!--me mando el stock probando  -->
    		<input type="hidden" name="cantidad" value="1"/>
    		  
		      <input type="submit" name="comprar" value="Comprar" class="btn"/>
       
		  </form>
		
	</div>
	
	<div class="cajaDes">
	<p><h3>Descripción </h3></p>
	<p> <?php echo $desc ?> </p>
	
	</div>
	<?php
		}
		?>
		
</div>

<?php include ('plantilla/footer.php');?>