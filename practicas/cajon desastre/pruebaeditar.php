
<html>
<head>
<meta charset="utf-8">
<title>Editar Registros Mysql Mediante Funcion</title>



</head>

<body>
<div >
<h1>Editar Registros con Función PHP </h1>
<br><br>
<?php 
include("funciones.php");
$dni = $_GET['dni'];
// $dni = (string) $dni;
var_dump(dni($dni));

?>
<!-- <form action="" method="post">
	<input type="text" value="<?php echo $dni->nombre;?>" name="nombre">
	<input type="text" value="<?php echo $rows->direccion;?>" name="direccion">
	<input type="text" value="<?php echo $rows->localidad;?>" name="localidad">
	<input type="text" value="<?php echo $rows->provincia;?>" name="provincia">
	<input type="text" value="<?php echo $rows->telefono;?>" name="telefono">
	<input type="text" value="<?php echo $rows->email;?>" name="email">
	<input type="submit" name="submit">
</form> -->

<?php
	
	// if(isset($_POST['submit'])){
	// 	$field = array("nombre"=>$_POST['nombre'], "direccion"=>$_POST['direccion'], "localidad"=>$_POST['localidad'], "provincia"=>$_POST['provincia'], "telefono"=>$_POST['telefono'], "email"=>$_POST['email']);
	// 	$tbl = "clientes";
	// 	edit($tbl,$field,'dni',$dni);
	// 	header("location:index.php");
	// }

		if (isset($_POST['submit'])) {
			
		
		$stmt= $con->prepare('UPDATE clientes SET nombre = :nombre, direccion = :direccion, localidad = :localidad, provincia = :provincia, telefono = :telefono, email = :email WHERE dni = :dni');
		$rows= $stmt->execute(array(':dni' => $dni, ':nombre' => $nombre, ':direccion' => $direccion, ':localidad' => $localidad, ':provincia' => $provincia, ':telefono' => $telefono, ':email' => $email));
		if ($rows > 0) {
			
			header('Location:index.php');

		}
		}

?>
</div>
</body>
</html>