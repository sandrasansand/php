<!-- En una sql recupero los datos del cliente que me llega por get, en el value imprimo los datos. Luego una sql de update. -->

<?php 
include 'funciones.php';
$conexion=conectar_db();




		$dni=$_GET['dni'];

	if (isset($dni)) {
		$sql1= "SELECT * FROM clientes WHERE dni='$dni'";

		$res=mysqli_query($conexion,$sql1);
		// $fila=mysqli_fetch_array($res);
		// $dni=$fila['dni'];
		// $nombre=$fila ['nombre']; 
		// $direccion=$fila ['direccion']; 
		// $localidad=$fila['localidad'];
		// $provincia=$fila['provincia'];
		// $telefono=$fila['telefono'];
		// $email=$fila['email'];

		while($fila = mysqli_fetch_array($res)) {
			$dni=$fila[0];
			$nombre=$fila [1]; 
			$direccion=$fila [2]; 
			$localidad=$fila[3];
			$provincia=$fila[4];
			$telefono=$fila[5];
			$email=$fila[6];
			

			//echo "<td>{$fila["dni"]}</td>";
			// echo "<td>{$fila["nombre"]}</td>";
			// echo "<td>{$fila["direccion"]}</td>";
			// echo "<td>{$fila["localidad"]}</td>";
			// echo "<td>{$fila["provincia"]}</td>";
			// echo "<td>{$fila["telefono"]}</td>";
			// echo "<td>{$fila["email"]}</td>";
			// echo "</tr>";
		}
		// 
		// 
		// 
		// 
		// echo "<form>";
			// echo ($dni=$_GET['dni']); 
			// echo "<input type='text' name='nombre' value='{$fila['nombre']}''>";
			// echo "<input type='text' name='nombre' value='{$fila['direccion']}''>";
			// echo "<input type='text' name='nombre' value='{$fila['localidad']}''>";
			// echo "<input type='text' name='nombre' value='{$fila['provincia']}''>";
			// echo "<input type='text' name='nombre' value='{$fila['telefono']}''>";
			// echo "<input type='text' name='nombre' value='{$fila['email']}''>";
			// echo "</form>";
	


		if (isset($dni)){
			$sql2="UPDATE clientes set nombre='$nombre',
			direccion='$direccion',
			localidad='$localidad',
			provincia='$provincia',
			telefono='$telefono',
			email='$email' where dni='$dni'";
			$respuesta=mysqli_query($conexion,$sql2);
			if ($respuesta) {
				header('Location:index.php');
			}
			echo '<p>Fallo al editar</p>';
		}
	}
}
?>
<form name="editarcliente" method="post" action="">
	<strong>DNI:</strong><?php echo ($dni=$_GET['dni']); ?><br/>
	<strong>Nombre:</strong><br/>
	<input type="text" name="nombre" value="<?php echo $nombre?>"><br/>
	<strong>Direccion:</strong><br/>
	<input type="text" name="direccion" value="<?php echo $direccion ?>"><br/>
	<strong>Localidad:</strong><br/>
	<input type="text" name="localidad" value=" <?php echo $localidad ?>"><br/>
	<strong>Provincia:</strong><br/>
	<input type="text" name="provincia" value=" <?php echo $provincia ?>"><br/>
	<strong>Teléfono:</strong><br/>
	<input type="text" name="telefono" value=" <<?php echo $telefono ?>"><br/>
	<strong>Email:</strong><br/>
	<input type="text" name="email" value="<?php echo $email ?>"><br/>
	<input type="submit" value="Editar" name="Editar" title="Editar" />
	&nbsp; ||&nbsp;
	<input type="reset" value="Restablecer" name="borrar" title="borrar" />
</form>

