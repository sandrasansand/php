<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<!-- Práctica 2.13. Usa dos (y sólo dos) bucles for anidados para imprimir por
pantalla las horas del día y sus cuartos. -->
<?php 
$horas =24;

for ($i=1; $i <=$horas ; $i++) { 
		echo "son las : " . $i ." horas " ;
		

		for ($j=15; $j <=60 ; $j +=15) { 
			echo  " y " . $j . "minutos" ;
			echo "<br>";



			
		}
	

}

	
	
	

 ?>
	
</body>
</html>