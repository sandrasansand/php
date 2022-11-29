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
	
}
echo "<br><br>";
/*Ejecutando el siguiente código podemos observar los diferentes resultados obtenidos entre utilizar la misma función empleando un paso de parámetros por valor o por referencia. Como es de esperar, mediante el paso por referencia la variable exterior se verá afectada por los cambios ocurridos en el interior de la función.
Para indicar que un parámetro se pasa por referencia se antepone el símbolo ampersand, "&", en la declaración de la función.
Una misma función puede emplear argumentos pasados por valor y por referencia, en una misma declaración.
*/


function duplicar_por_valor($argumento) {
$argumento = $argumento * 2;
echo "Dentro de la función vale $argumento.<br>";
}
function duplicar_por_referencia(&$argumento) {
$argumento = $argumento * 2;
echo "Dentro de la función vale $argumento.<br>";
}
$numero1 = 5;
echo "Antes de llamar a la función vale $numero1.<br>";
duplicar_por_valor($numero1);
echo "Después de llamar a la función vale $numero1.<br>";
echo "<br>";
$numero2 = 7;
echo "Antes de llamar a la función vale $numero2.<br>";
duplicar_por_referencia($numero2);
echo "Después de llamar a la función vale $numero2 .<br><br>";
echo "<br>";

/* Aunque el lenguaje no nos permite hacer que una función devuelva dos valores, tenemos la posibilidad de pasar por referencia las variables a devolver y, así, modificar su contenido en el cuerpo de la función. Aquí se emplea esta estratagema para intercambiar el contenido de dos variables. */


function intercambiar(&$argumento1, &$argumento2) {
$auxiliar = $argumento1;
$argumento1 = $argumento2;
$argumento2 = $auxiliar;
}
$numero1 = 5;
$numero2 = 8;
echo "Antes: ($numero1, $numero2)<br>";
intercambiar($numero1, $numero2); 
echo "Despues: ($numero1, 
$numero2)";

echo "<br><br>";
/*Este código muestra el alcance de una variable dentro de una función.
No hay que confundir este ejemplo con el ejemplo 3.3.4. En este caso  no hay
ningún argumento. */

function mi_ciudad() {
$ciudad = "Madrid";
echo "Dentro de la función vale $ciudad.<br>";
}
$ciudad = "Barcelona";
echo "Antes de llamar a la función vale $ciudad.<br>";
mi_ciudad();
echo "Después de llamar a la función vale $ciudad.<br>";
echo "<br><br>";

 /* Puede darse el caso de que queramos acceder a una variable global dentro del cuerpo de la función. Para conseguirlo le antepondremos la palabra clave  global  a la primera referencia de la variable, con lo que el interprete PHP sabe que estamos llamando a la variable externa. */
function mi_ciudad2() {
global $ciudad;
$ciudad = "Madrid";
echo "Dentro de la función vale $ciudad.<br>";
}
$ciudad = "Barcelona";
echo "Antes de llamar a la función vale $ciudad.<br>";
mi_ciudad2();
echo "Después de llamar a la función vale $ciudad.<br>";
echo "<br><br>";




	?>