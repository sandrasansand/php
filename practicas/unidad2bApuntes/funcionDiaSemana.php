<!--  La siguiente función devuelve aleatoriamente un día de  la
	semana. -->

	<?php 
	function dia_semana(){
		$semana= array("lunes","martes","miércpñes","jueves","viernes","sábado","domingo");
		$dia =$semana[rand(0,6)];
		return $dia;
	}

	$dia_cine = dia_semana();
	echo "El próximo $dia_cine iré al cine";
echo "<br><br>";


/* Función sencilla que recibe un parámetro y devuelve un resultado. Luego es llamada dentro de un bucle, para mostrar el cuadrado de los números del 1 al 10. */

function cuadrado($numero){
	return $numero * $numero;
}

for ($i=0; $i <=10 ; $i++) { 
	echo "$i al cuadrado es igual a : " .cuadrado($i) . "<br>";
	echo "<br><br>";
}

	?>