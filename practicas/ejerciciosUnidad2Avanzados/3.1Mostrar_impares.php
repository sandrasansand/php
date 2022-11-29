
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mostrar impares</title>
</head>
<body>
	<?php 

	function mostrar_impares ($cadena){

		
		$long= strlen($cadena);
	for ($i=1; $i<$long; $i+=2) { //1 3 5 7 hasta recorrer la longuitud de la cadena
		echo $cadena[$i] . "-"; // mostramos por pantalla
	}
} 

mostrar_impares("No por mucho madrugar amanece mas temprano ");
?>	
</body>
</html>
