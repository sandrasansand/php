<?php
//$raiz="../";
include ('conecta.php');
	$con=conectar_db();
	$consulta= "select * from products order by nombre";
    $resultado= mysqli_query($con,$consulta);
	$nro_reg=mysqli_num_rows($resultado);
	
if ($nro_reg==0){
	echo 'no se han enconcontrado productos para mostrar';
}
$reg_por_pagina= 4;

//@$nro_pagina=$_GET['num'];

if (isset($_GET['num'])){
$nro_pagina=$_GET['num'];
}
else{
	$nro_pagina=1;
}




if (is_numeric($nro_pagina)){
	$inicio=($nro_pagina-1)*$reg_por_pagina; //ES -1 porque comenzamos en la página 1 no en la 0
}
else{
	$inicio=0;
}

$resultado=mysqli_query($con,"select * from products order by nombre limit $inicio,$reg_por_pagina");
/*
$consulta= "select * from products order by nombre limit $inicio,$reg_por_pagina";
$resultado=mysqli_query($con,$consulta); */


$can_paginas=ceil($nro_reg/$reg_por_pagina);


 

?>
<?php include ('plantilla/head.php');?>

<!-- HACER ESTO EN PLANTILLA COMO SECTION -->
<div class="contenedor">

	<?php

	

	    while ($filas=mysqli_fetch_array($resultado)){   //recorremos y nos guardamos todos los campos de la base, cada uno en una variable
			  $id =$filas ['id'];                       
			  $imagen =$filas['imagen'];
			  $nombre =$filas['nombre'];
			  $desc =$filas['descripcion'];
			  $precio =$filas['precio'];
			  $stock =$filas['stock'];
			  $fecha =$filas['fecha'];

	?>


	<div class="caja">
		<h2><?php echo $nombre?></h2>
		<img src="<?php echo $imagen ?>" width="100" height="90" />
		<p>€ <?php echo $precio ?> </p>
		
		<form action="detalle.php" method="post" name="detalle">
			<input type="hidden" name="id" value="<?php echo $id ?>" />
			<input type="submit" class="btn" value="detalle"/>
		</form>
	</div>
	<?php
		}
		?>
		
</div>

<div align="center" id="paginador">
<?php

if ($nro_pagina>1)
	echo "<a href='galeria.php?num=".($nro_pagina-1)."'> Anterior</a>";

for ($i=1;$i<=$can_paginas;$i++){
	if ($i==$nro_pagina){
		echo $i." ";
	}
	else  {
		echo "<a href='galeria.php?num=$i'>$i</a>";
	}
}

if ($nro_pagina<$can_paginas)
	echo "<a href='galeria.php?num=".($nro_pagina+1)."'> Siguiente>";
?>
</div>
<?php include ('plantilla/footer.php');?>