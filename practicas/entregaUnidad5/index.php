
<?php 
include 'funciones.php';
$con=conectar_db();
?>

<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Mostrar Clientes</title>
</head>
<body>
	<table border="0" cellpadding="2" cellspacing="1" class="tabla">
		<tr>
			<th>DNI</th>
			<th>Nombre</th>
			<th>Dirección</th>
			<th>Localidad</th>
			<th>Provincia</th>
			<th>Teléfono</th>
			<th>Email</th>
			<th>Editar</th>
			<th>Borrar</th>
		</tr>
		<?php 
		$stm=$con->prepare('SELECT * FROM clientes');
		$stm->execute();

		while ($datos =$stm->fetch()) {
			echo "<tr>";
			echo "<td>";
			echo $datos[0];
			echo "</td>";
			echo "<td>";
			echo $datos[1];
			echo "</td>";
			echo "<td>";
			echo $datos[2];
			echo "</td>";
			echo "<td>";
			echo $datos[3];
			echo "</td>";
			echo "<td>";
			echo $datos[4];
			echo "</td>";
			echo "<td>";
			echo $datos[5];
			echo "</td>";
			echo "<td>";
			echo $datos[6];
			echo "</td>";
			$dni=$datos[0];
			echo "<td><a href='editarcliente.php?dni=$dni'><img src='iconos/editar2.png'></a></td>";
			echo "<td><a href='borrarcliente.php?dni=$dni'><img src='iconos/eliminar.png'></a></td>";
			echo "</tr>";
		}
		?>
	</table>
	<div class="center">
		<button onclick="location.href='nuevocliente.php'">Nuevo Cliente</button>
	</div>

	