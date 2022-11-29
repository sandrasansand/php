<?php include 'funciones.php'; 
$con=conectar_db();
?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Actualizar información PDO PHP y MySQL | BaulPHP</title>


	<script type="text/javascript">
		$(document).ready(function() {
			setTimeout(function() {
				$(".content").fadeOut(1500);
			},3000);

		});
	</script>
</head>

<body>

	<?php

	if(isset($_POST['actualizar'])){
///////////// Informacion enviada por el formulario /////////////
		$dni=trim($_GET['dni']);
		$nombre=trim($_POST['nombre']);
		$direccion=trim($_POST['direccion']);
		$localidad=trim($_POST['localidad']);
		$provincia = date('provincia');
		$telefono=trim($_POST['telefono']);
		$email=trim($_POST['email']);
///////// Fin informacion enviada por el formulario /// 

////////////// Actualizar la tabla /////////
		$consulta = "UPDATE clientes
		SET `nombre`= :nombre, `direccion` = :direccion, `localidad` = :localidad, `provincia` = :provincia, `telefono` = :telefono, `email` = :email
		WHERE `dni` = :dni";
		$sql = $con->prepare($consulta);
		$sql->bindParam(':dni',$dni,PDO::PARAM_STR, 9);
		$sql->bindParam(':nombre',$nombre,PDO::PARAM_STR, 30);
		$sql->bindParam(':direccion',$direccion,PDO::PARAM_STR, 50);
		$sql->bindParam(':localidad',$localidad,PDO::PARAM_STR, 30);
		$sql->bindParam(':provincia',$provincia,PDO::PARAM_STR, 30);
		$sql->bindParam(':telefono',$telefono,PDO::PARAM_STR, 9);
		$sql->bindParam(':email',$id,PDO::PARAM_STR, 30);

		$sql->execute();

		if($sql->rowCount() > 0)
		{
			$count = $sql -> rowCount();
			echo "<div class='content alert alert-primary' > 


			Gracias: $count registro ha sido actualizado  </div>";
		}
		else{
			echo "<div class='content alert alert-danger'> No se pudo actulizar el registro  </div>";

			print_r($sql->errorInfo()); 
		}
}// Cierra envio de guardado
?>
<h3 >Actualizar información PDO PHP y MySQL</h3>

<?php 
if (isset($_POST['actualizar'])){
	$dni = $_GET['dni'];
	$sql= "SELECT * FROM clientes WHERE dni = :dni"; 
	$stmt = $con->prepare($sql);
	$stmt->bindParam(':dni', $dni, PDO::PARAM_STR); 
	$stmt->execute();
	$obj = $stmt->fetchObject();

	?>

	<form name="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
		<input value="<?php echo $obj->dni;?>" name="dni" type="hidden">


		<label for="nombre">Nombre</label>
		<input value="<?php echo $obj->nombre;?>" name="nombre" type="text"  placeholder="Nombre">
		<label for="direccion">Dirección</label>
		<input value="<?php echo $obj->direccion;?>" name="direccion" type="text"  placeholder="direccion">

		<label for="localidad">Localidad</label>
		<input value="<?php echo $obj->localidad;?>" name="localidad" type="text"  placeholder="localidad">
		<label for="edad">Provincia</label>
		<input value="<?php echo $obj->provincia;?>" name="provincia" type="text" placeholder="provincia">
		<label for="edad">Telefono</label>
		<input value="<?php echo $obj->telefono;?>" name="telefono" type="text" placeholder="telefono">
		<label for="email">Email</label>
		<input value="<?php echo $obj->email;?>" name="email" type="text" placeholder="email">
		<button name="actualizar" type="submit" >Actualizar Registro</button>
	</form>
<?php }?>

<table border="0" cellpadding="2" cellspacing="1" class="tabla">
	<thead>
		<th>DNI</th>
		<th>Nombre</th>
		<th>Dirección</th>
		<th>Localidad</th>
		<th>Provincia</th>
		<th>Teléfono</th>
		<th>Email</th>
		<th>Editar</th>
		<th>Borrar</th>
	</thead>
	<?php
	$sql = "SELECT * FROM clientes"; 
	$query = $con -> prepare($sql); 
	$query -> execute(); 
	$results = $query -> fetchAll(PDO::FETCH_OBJ); 

	if($query -> rowCount() > 0)   { 
		foreach($results as $result) { 
			echo "<tr>
			<td>".$result -> nombres."</td>
			<td>".$result -> apellidos."</td>
			<td>".$result -> profesion."</td>
			<td>".$result -> estado."</td>
			<td>".$result -> fregis."</td>
			<td>
			<form method='POST' action='".$_SERVER['PHP_SELF']."'>
			<input type='hidden' name='id' value='".$result -> id."'>
			<button name='editar'>Editar</button>
			</form>
			</td>
			</tr>";

		}
	}
	?>
</tbody>
</table>
</div>
</form>
</body>
</html>