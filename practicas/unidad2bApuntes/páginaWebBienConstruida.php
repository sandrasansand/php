<!-- Ejemplo 3.1.5. Esta es una página web en PHP bien construida. Usa un
algoritmo para hallar el máximo común divisor de dos números generados
aleatoriamente. El mayor número entero que los divide sin dejar residuo alguno (sin que sobre algún número). El algoritmo de Euclides,  utiliza el algoritmo de la división junto al hecho que el MCD de dos números también divide al resto obtenido de dividir el mayor entre el más pequeño. Ejemplo Si se divide 60 entre 48 dando un cociente de 1 y un resto de 12, el MCD será por tanto divisor de 12. Después se divide 48 entre 12 dando un resto de 0, lo que significa que 12 es el MCD.    // si se divide 42/14 =3 MCM porque el resto es 0-->
<?php 
//inicialización
define('LIMITE', 100);
//lectura de datos
$i = rand(1,LIMITE); //simulamos la lectura
$j = rand(1,LIMITE);
//operaciones con los datos
if ($i > $j) {
	$mayor = $i;
	$menor = $j;
} else{
	$mayor = $j;
	$menor = $i;
} while (($mayor % $menor) !=0) {
	$auxiliar = $menor;
	$menor = $mayor % $menor;
	$mayor = $auxiliar;
}
$mcd = $menor;
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Máximo común divisor</title>
</head>
<body>
	El máximo común divisor de <?= $i ?> y <?=$j ?> es <?=$mcd ?>.
</body>
</html>