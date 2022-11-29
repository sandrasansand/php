<?php  
include 'funciones.php';
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
		$conexion=conectar_db();
		$sql = "SELECT * FROM clientes";
		$res = mysqli_query($conexion,$sql);
		while($fila = mysqli_fetch_array($res)) {
			echo "<tr>";
			echo "<td>{$fila["dni"]}</td>";
			echo "<td>{$fila["nombre"]}</td>";
			echo "<td>{$fila["direccion"]}</td>";
			echo "<td>{$fila["localidad"]}</td>";
			echo "<td>{$fila["provincia"]}</td>";
			echo "<td>{$fila["telefono"]}</td>";
			echo "<td>{$fila["email"]}</td>";
			$dni=$fila["dni"];
			echo "<td><a href='editar.php?dni=$dni'><img src='iconos/editar2.png'></a></td>";
			echo "<td><a href='borrarCliente.php'><img src='iconos/eliminar.png'></a></td>";
			echo "</tr>";
		}
		?> 
	</table>
	<button onclick="location.href='insertarClientes.php'">Nuevo Cliente</button>
