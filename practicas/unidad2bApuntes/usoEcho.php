<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>numeros primos</title>
</head>
<body>
<!-- Es recomendable usar esta forma de producir la salida cuando es
predominante la cantidad de código PHP sobre la cantidad de código HTML. Lo
mismo se aplica al uso de la función print() que produce los mismos resultados. -->
<?php 
// Ejemplo 3.1.2. En este pequeño programa predomina el código PHP
// sobre el código HTML.
define('LIMITE', 100);
echo "los numeros primos del 1 al " . LIMITE. " son";
echo "<br>";
for ($i=1; $i <=LIMITE ; $i++) { 
	$es_primo = TRUE; // Hipótesis inicial es primo
	for ($j=2; $j <$i ; $j++) { 
		if (($i % $j) == 0) { //Tiene un divisor
			$es_primo = FALSE; //por tanto no es n primo
			break;
		}
		
		
	}
	if ($es_primo) {
		echo "$i";
		echo "<br>";
	}
}



 ?>

	
</body>
</html>