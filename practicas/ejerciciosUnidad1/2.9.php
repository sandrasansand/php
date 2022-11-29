<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<!-- Práctica 2.9. Este nuevo programa utiliza las constantes del ejercicio 2.8.
Usando la sentencia if para comparar precios, muestra el nombre de aquellos
productos que cuesten menos de 1.50 euros/kg. -->
<?php  
define('PRECIO_JUDIAS', 3.50);
define('PRECIO_PATATAS',0.40 );
define('PRECIO_TOMATES',1 );
define('PRECIO_MANZANAS',1.20 );
define('PRECIO_UVAS',2.50);

if (PRECIO_JUDIAS < 1.50) {
	echo "Precio judias : " .PRECIO_JUDIAS;
	echo "<br>";
}
if (PRECIO_PATATAS < 1.50) {
	echo "Precio patatas : " . PRECIO_PATATAS;
	echo "<br>";
} 
if (PRECIO_TOMATES < 1.50) {
	echo "Precio tomates : " .PRECIO_TOMATES;
	echo "<br>";
}
if (PRECIO_MANZANAS < 1.50) {
	echo "Precio manzanas : " .PRECIO_MANZANAS;
	echo "<br>";
}
if (PRECIO_UVAS < 1.50) {
	echo "Precio uvas : " .PRECIO_UVAS;
	echo "<br>";
}

 


?>
	
</body>
</html>