


<body>

	<h1>Editar Registros con Función PHP </h1>
	<br><br>

	<?php
	include("function.php");
	?>
	<table border="1" width="100%">
		<tr>

			<th width="">Nombre</th>
			<th width="">Direccion</th>
			<th width="">Localidad</th>
			<th width="">Provincia</th>
			<th width="">Telefono</th>
			<th width="">Email</th>
			<th width="">Opcion</th>
			<th width="">Opcion</th>
		</tr>
		<?php 
		$sql = "select * from clientes";
		$result = db_query($sql);
		while($row = mysqli_fetch_object($result)){
			?>
			<tr>

				<td><?php echo $row->nombre;?></td>
				<td><?php echo $row->direccion;?></td>
				<td><?php echo $row->localidad;?></td>
				<td><?php echo $row->provincia;?></td>
				<td><?php echo $row->telefono;?></td>
				<td><?php echo $row->email;?></td>
				<td><a href="editar.php?dni=<?php echo $row->dni;?>">Editar
			    <input type="hidden" name="true" value="=true"></a></td>
							<td><a href="borrar.php?dni=<?php echo $row->dni;?>">Borrar
								<input type="hidden" name="true" value="=true"></a>
								<!-- <i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a> -->
							</td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</body>
		</html>