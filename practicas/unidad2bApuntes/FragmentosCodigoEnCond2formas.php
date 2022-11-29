<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>uso sintaxis abreviada en condicionales</title>
</head>
<body>
	<!-- 3.1.1.4 Fragmentos de HTML dentro de estructuras condicionales. -->
	<?php 
	$autorizado = FALSE;
	if (!$autorizado) {
		echo '<center>';
		echo '<table bgcolor ="#CCCCCC">';
		echo '<tr>';
		echo '<td align="center">';
		echo '<font color="#ff0000" size ="+2">';
		echo 'No esta autorizado a ver esta página. ';
		echo '<br>';
		echo 'Contacte con el administrador del sistema';
		echo '</font>';
		echo '</td>';
		echo '</tr>';
		echo '</table>';
		echo '</center>';
	}
	echo '<br>';
	?>
	<?php 
	$autorizado = FALSE;
	if (!$autorizado) {
		?>

		<center>
			<table bgcolor="#cccccc" >
				<tr>
					<td align="center">
						<font color="#ff0000" size="+2">
							No está autorizado a ver esta página. <br> Contacte con el administrador del sistema.
						</font>
					</td>
				</tr>
			</table>

		</center>
		<?php
	}
