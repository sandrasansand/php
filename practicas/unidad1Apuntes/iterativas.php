<?php 
/*while Es la estructura más sencilla. Repite indefinidamente la ejecución de un bloque
de código mientras la evaluación de la condición sea cierta.*/
$i=1;
while ($i<= 10 ) {
	echo "es la linea " . $i;
	echo "<br>";
	$i++;
	
}

echo "<br><br>";
define('HORA_CENAR', 21);//defino constante
$hora=12;
while ( $hora < HORA_CENAR) {
	echo "son la hora " . $hora;
	echo "Faltan ". (HORA_CENAR - $hora) . " horas par la cena"; //calculo las horas que faltan
	echo "<br>";
	$hora++;
}
echo "son las ". $hora ."Es la hora de la cena"; //imprimo constante

echo "<br><br>";

/*Do while la diferencia con while es que siempre entrara una vez aunque la condicion sea falsa.*/
do {$dado = rand(1,6);
	echo "ha sacado un : ". $dado . ".";
	echo "<br>";
	
} while ( $dado !=5);
echo "Bien!! sacó una ficha de casa";
echo "<br><br>";


/*instruccion for El bucle seguirá ejecutándose de forma continua siempre y cuando la condición siga siendo TRUE. */

for ($i=1; $i <=10 ; $i++) {  //incremento bucle sencillo que se ejecutara 10 veces
	echo "linea" . $i;
	echo "<br>";
}

echo "<br><br>";
for ($i=10; $i >=0 ; $i--) { //decremento
	echo "linea" . $i . "....";
	echo "<br>";
	
}

echo "ignicion";
echo "<br><br>";


//  La condición no tiene por qué ser necesariamente sobre la variable declarada como índice

$j=3;
for ($i=1; $j<=15 ; $i++) { 
	$j= $i*3;
	echo "variable j: ". $j;
	echo "<br><br>";
}

?>


<?php
 /*operador null Así pues, el operador de fusión null devuelve su primer operando si existe y no es NULL; de lo contrario devuelve su segundo operando. Se usa  como aliciente sintáctico para el caso común de la necesidad de utilizar un operador ternario junto con la funcion isset(). Básicamente isset() nos dice si una variable está definida o no.
*/

//Obtener el valor de $_GET['usuario'] y devolver 'nadie' si no existe.
 $nombre_usuario = $_GET['usuario'] ?? 'nadie';
// Esto equivale, usando el operador ternario a:
 $nombre_usuario = isset($_GET['usuario']) ? $_GET['usuario'] : 'nadie';
// y lo mismo sin el uso del operdor ternario:
 if( isset($_GET['usuario']) && ($_GET['usuario']!=NULL) )
 	$nombre_usuario = $_GET['usuario'];
 else
 	$nombre_usuario = ‘nadie’;
//La fusión se puede encadenar. Esta sentencia devolverá el primer valor definido de //$_GET['usuario'], $_POST['usuario'], y 'nadie’, en este orden.
 $nombre_usuario = $_GET['usuario'] ?? $_POST['usuario'] ?? 'nadie'; 

/* La primera linea del programa dice algo así como si existe la variable
 $_GET[‘usuario’] guarda su valor en la variable $nombre_usuario. Si no existe,
 guarda la cadena ‘nadie’ en la variable $nombre_usuario.*/

 ?>
 <?php 
//anidamiento de bloques de código
 /*ejemplo de anidamiento programa que cuenta hasta el 10 par o impar*/
 for ($i=1; $i <=10 ; $i++) { 
 	if ($i%2 != 0) {
 		echo $i." es impar";
 	} else {
 		echo $i." es par";
 	}
 	echo "<br><br>";
 }

 /*ejemplo de programa que muestra una tabla de multiplicar*/
 ?>
 <table>
 	<?php 
 	for ($i=1; $i <=10 ; $i++) { 
 		echo "<tr align='right'>";
 		for ($j=1; $j<=10 ; $j++) { 
 			echo "<td width='25'>". $i*$j. "</td>";
 		}
 		echo "</tr>";
 	}
 	?>
 </table>





