<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<!-- Práctica 2.7. Modifica el programa anterior añadiéndole la constante PI. Opera con estas constantes para obtener la distancia de una vuelta al mundo siguiendo el ecuador y muéstrala por pantalla (circunferencia = 2 * PI * radio). Calcula también a cuantas vueltas al mundo equivale la distancia entre la Tierra y el Sol, y muéstralo por pantalla. -->

<?php 
define('RADIO_ECUATORIAL', 6378.1);
define('DISTANCIA_TIERRA_SOL',149.597870);
define('PI', 3.1415);

$circunferencia = (2*PI*RADIO_ECUATORIAL);
echo "la distancia de una vuelta al mundo siguiendo el ecuador es : " . $circunferencia;
echo "<br>";

echo "cuantas vueltas al mundo equivale la distancia entre la Tierra y el Sol : " . ( $circunferencia/DISTANCIA_TIERRA_SOL);




 ?>

	
</body>
</html>