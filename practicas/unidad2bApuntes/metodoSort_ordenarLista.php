<!-- Ejemplo 3.3.9. En esta ejemplo se ordena una lista de nombres, primero por el
procedimiento normal. Luego se muestra la forma de ordenar el mismo array
sin hacer distinción entre mayúsculas y minúsculas. -->

<?php 
$astros=array("planeta","cometa","Venus","Júpiter");
echo "Ordenación distinguiendo mayúsculas y minúsculas: <br>"; 
sort($astros);// ordena los elem de un array, considera menores las minúsculas
for ($i=0; $i <count($astros) ; $i++) { 
	echo "$astros[$i] <br>";
}
echo "<br><br>";
echo "Ordenación sin distinguir mayúsculas y minúsculas: <br>";
$astros_minusculas= array_map("strtolower",$astros);
array_multisort($astros_minusculas, SORT_ASC, SORT_STRING, $astros);
for ($i=0; $i <count($astros) ; $i++) { 
	echo "$astros[$i] <br>";
}

 ?>
