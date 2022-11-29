<!-- Práctica 3.10. Escribe el código para las siguientes funciones. 
•  Función pesetas_a_euros($pesetas): recibe como parámetro un 
valor en pesetas y devuelve el equivalente en euros (1 euro = 
166.368 ptas). 
•  Función  euros_a_pesetas($euros):  recibe  como  parámetro  un 
valor en euros y devuelve el equivalente en pesetas.  -->
<?php 
function pesetas_a_euros($pesetas){
	return ($pesetas/166.368);
	
}
function euros_a_pesetas($euro){
	return ($euro*166.368);
}

// $a= pesetas_a_euros(166.368);
// echo "$a";
// echo "<br>";
// echo (euros_a_pesetas(120));


?>