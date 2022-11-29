 <?php 
include 'funciones.php';
$con=conectar_db();
//header('Content-Type: text/html; charset=utf-8');

$dni= isset($_POST['dni']) ? $_POST['dni'] : null;
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$direccion = isset($_POST['direccion']) ? $_POST['direccion'] : null;
$localidad=isset($_POST['localidad']) ? $_POST['localidad'] : null;
$provincia=isset($_POST['provincia']) ? $_POST['provincia'] : null;
$telefono=isset($_POST['telefono']) ? $_POST['telefono'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;


//Este array guardará los errores de validación que surjan.
$errores = array();
//Pregunta si está llegando una petición por POST, lo que significa que el usuario envió el formulario.

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 	   //Valida que el campo DNI no sea valido.
	if (!dni_valido($dni)) {
		$errores[] = 'El campo dni es incorrecto.';
	}
   //Valida que el campo nombre no esté vacío.
	if (!validaRequerido($nombre)) {
		$errores[] = 'El campo nombre es incorrecto.';
	}
	if (!validaRequerido($direccion)) {
		$errores[] = 'El campo direccion es incorrecto.';
	}
	if (!validaRequerido($localidad)) {
		$errores[] = 'El campo localidad es incorrecto.';
	}
	if (!validaRequerido($provincia)) {
		$errores[] = 'El campo provincia es incorrecto.';
	}
    //Valida que el campo email sea correcto.
	if (!comprobarEmail($email)) {
		$errores[] = 'El campo email es incorrecto.';
	}
   //Verifica si ha encontrado errores y de no haber redirige a la página con el mensaje de que pasó la validación.
	if(!$errores){
		try {
			$stmt=$con->prepare('INSERT INTO clientes (dni, nombre, direccion, localidad, provincia, telefono, email) VALUES (:dni, :nombre, :direccion, :localidad, :provincia, :telefono, :email)');
			$rows= $stmt->execute(array(':dni' => $dni, ':nombre' => $nombre, ':direccion' => $direccion, ':localidad' => $localidad, ':provincia' => $provincia, ':telefono' => $telefono, ':email' => $email));
			if ($rows==1) {
				echo "Insercción correcta";
				header('Location:index.php');
			} 
		}catch (PDOException $e) {
			echo 'Error'. $e->getMessage;

		}
	}	
}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Formulario Nuevo Cliente</title>
</head>
<body>
	<!-- 	añadido muestro los errores de validacion -->
	<?php if ($errores): ?>
		<ul style="color: #f00;">
			<?php foreach ($errores as $error): ?>
				<li> <?php echo $error ?> </li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
	<h2>Introduzca sus datos</h2>
	<form name="frm_Ncliente" method="post" action="">
		<h3>NUEVO CLIENTE</h3><br/>
		<strong>Dni:</strong><br/>
		<input type="text" name="dni" size="9" maxlength="9"><br>
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
		<input type="submit" value="enviar" name="Enviar" title="Enviar" />
		&nbsp;&nbsp;
		<input type="reset" value="borrar" name="borrar" title="borrar" />
	</form>
</body>
</html>





