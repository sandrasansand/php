<?php 
include 'seguridad.php';
?>

<html>
<head>
	<title>Aplicación segura</title>
</head>
<body>
	<h1>Usuario autentificado</h1><br><br>
	<?php 
	echo " {$_SESSION['autentificado']}<br>"; //he mostrado aquí que si está autentificado
	?>
	<!-- enlace a tienda -->
	<a href="tienda.php">Entrada a la Tienda</a> 
</body>
</html>