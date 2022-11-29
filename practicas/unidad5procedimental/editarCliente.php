<!-- En una sql recupero los datos del cliente que me llega por get, en el value imprimo los datos. Luego una sql de update. -->

<?php 
include 'funciones.php';
$conexion=conectar_db();

if (isset($_POST['Editar'])){
	if (isset($_GET['dni'])){
		$dni=$_GET['dni'];}
		if (empty($_POST['nombre'])) {
			echo "el campo nombre no puede estar vacío";
		} else{
			$nombre=$_POST['nombre'];
		}
		if (empty($_POST['direccion'])) {
			echo "el campo direccion no puede estar vacío";
		} else{
			$direccion=$_POST['direccion'];
		}if (empty($_POST['localidad'])) {
			echo "el campo localidad no puede estar vacío";
		} else{
			$localidad=$_POST['localidad'];
		}if (empty($_POST['provincia'])) {
			echo "el campo provincia no puede estar vacío";
		} else{
			$provincia=$_POST['provincia'];
		}if (empty($_POST['telefono'])) {
			echo "el campo telefono no puede estar vacío";
		} else{
			$telefono=$_POST['telefono'];
		}if (empty($_POST['email'])) {
			echo "el campo email no puede estar vacío";
		} else{
			$email=$_POST['email'];
			comprobarEmail($email);
		}

		if (isset($dni)){
			$sql="UPDATE clientes set nombre='$nombre',
			direccion='$direccion',
			localidad='$localidad',
			provincia='$provincia',
			telefono='$telefono',
			email='$email' where dni='$dni'";
			$respuesta=mysqli_query($conexion,$sql);
			if ($respuesta) {
				header('Location:index.php');
			}
			echo '<p>Fallo al editar</p>';
		}
	}
	?>
	<form name="editarcliente" method="post" action="">

		<strong>Nombre:</strong><br/>
		<input type="text" name="nombre"><br/>
		<strong>Direccion:</strong><br/>
		<input type="text" name="direccion"><br/>
		<strong>Localidad:</strong><br/>
		<input type="text" name="localidad"><br/>
		<strong>Provincia:</strong><br/>
		<input type="text" name="provincia"><br/>
		<strong>Teléfono:</strong><br/>
		<input type="text" name="telefono"><br/>
		<strong>Email:</strong><br/>
		<input type="text" name="email"><br/>
		<input type="submit" value="Editar" name="Editar" title="Editar" />
		&nbsp;||&nbsp;
		<input type="reset" value="borrar" name="borrar" title="borrar" />
	</form>

