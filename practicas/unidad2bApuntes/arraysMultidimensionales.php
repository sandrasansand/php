<!-- El contenido de un elemento de un array puede, a su vez, ser un array. De esta
forma se pueden construir arrays multidimensionales.
Ejemplo 3.2.14.  Se muestra como almacenar una matriz, o array de dos
dimensiones, que contiene una sopa de letras generada  aleatoriamente-->

<?php 
DEFINE ("ALTO",10);
DEFINE("ANCHO",20);
$sopa_letras=array();
for ($i=0; $i <ALTO ; $i++) { 
	for ($j=0; $j <ANCHO ; $j++) { 
		$sopa_letras[$i][$j]= chr(rand(65,90));//función chr devuelve un carácter dado su numero ascii
	}
}
echo "SOPA DE LETRAS <br>";
echo "<br>";
for ($i=0; $i <ALTO ; $i++) { 
	for ($j=0; $j <ANCHO ; $j++) { 
		echo $sopa_letras[$i][$j];
		}
		echo "<br>";
}

 ?>