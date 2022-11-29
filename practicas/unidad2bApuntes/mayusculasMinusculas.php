<!-- La función strtoupper() convierte los textos a mayúsculas, y strtolower() a
	minúsculas.strtoupper(cadena) -->

	<?php 

	$email = " MAUROSOSANTOS@PERNAMBUCO.ES ";
	echo "Dirección recibida: '$email'.<br>";
// Convertimos a minúsculas
	$email = strtolower($email);
	echo "Dirección corregida: '$email'.";
	?>





