<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<!-- Práctica 2.8. Crea un programa que muestre un tiquet de compra de una frutería.
Los precios de los productos se deben guardar en constantes y los pesos en
variables.
Para redondear los precios de la compra se puede usar la función number_format()
de la siguiente manera:(aprecha, ve al manual on-line de php, y busca para que
sirve y cómo utilizar esta función) -->
<?php
define('PRECIO_JUDIAS', 3.50);
define('PRECIO_PATATAS',0.40 );
define('PRECIO_TOMATES',1 );
define('PRECIO_MANZANAS',1.20 );
define('PRECIO_UVAS',2.50);

$peso_judias = 1.21;
$coste_judias = PRECIO_JUDIAS * $peso_judias;
//echo number_format($coste_judias, 2);
$peso_patatas = 1.73;
$coste_patatas=PRECIO_PATATAS* $peso_patatas;
//echo number_format($coste_patatas,2);
$peso_tomates=2.08;
$coste_tomates= PRECIO_TOMATES*$peso_tomates;
$peso_manzanas=2.15;
$coste_manzanas=PRECIO_MANZANAS*$peso_manzanas;
$peso_uvas=0.77;
$coste_uvas=PRECIO_UVAS*$peso_uvas;
$total= $coste_judias + $coste_manzanas + $coste_patatas + $coste_tomates + $coste_uvas;

echo "Producto-Precio/Kg-Peso-Precio" . "</br>";

echo "Judias: " . number_format(PRECIO_JUDIAS,2) . " - ". $peso_judias. " - " . number_format($coste_judias, 2) . "</br>";
echo "Patatas: " . number_format(PRECIO_PATATAS,2) . " - " .$peso_patatas. " - " . number_format($coste_patatas,2) . "</br>";
echo "Tomates: " . number_format(PRECIO_TOMATES,2) . " - " . $peso_tomates . " - " . $coste_tomates . "</br>";
echo "Manzanas: " . number_format(PRECIO_MANZANAS,2) . " - " . $peso_manzanas . " - " . $coste_manzanas . "</br>";
echo "Uvas: " . number_format(PRECIO_UVAS,2) . " - " . $peso_uvas . " - " . number_format($coste_uvas,2) . "</br>";

echo "Total: " . number_format($total,2) . "</br>";
echo "Gracias por su compra.";



?>


	
</body>
</html>