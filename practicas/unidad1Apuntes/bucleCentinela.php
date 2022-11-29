<?php 
$salir = FALSE; //variable centinela inicializada en FALSE

WHILE($salir==FALSE){ //condición que $salir siga siendo FALSE
	$n=rand(1,500);//lo que se repite en el bucle buscar un numero aleatorio del 1 al 500
	echo ($n);      //y escribirlo

	$salir=($n%7==0);  //el centinela vale TRUE si es múltiplo de 7
}

 ?>