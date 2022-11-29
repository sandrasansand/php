

<?php 
echo "ESTRUCTURAS CONDICIONALES <br>";
 /*Las dos construcciones siguientes son equivalentes, aunque es
preferible usar la primera por claridad con{} */

$hora = 8;
if ($hora==8) {
	echo "suena el despertador";
} 
echo "<br>";
if ($hora==8) 
	echo "suena el despertador";
echo "<br> <br>";

/*Veamos la diferencia entre usar llaves para encuadrar un bloque
de texto, y no hacerlo */
$hora=11;
if ($hora==8) {
	echo "suena el despertador  ";
	echo "es la hora de levantarse ";
}
echo "<br>";

if ($hora==8) 
	echo "suena el despertador ";
	echo "es la hora de levantarse ";
echo "<br> <br>";

/*En estos casos la sentencia if se completa con un bloque de código que sólo se
ejecuta si la condición es falsa */

$hora = 17;
if ($hora <=12) {
	echo "son las : " . $hora . " de la mañana";
} else {
	echo "son las : " . ($hora-12) . " de la tarde";
}

echo "<br> <br>";

/*También puede suceder que queramos encadenar diferentes condiciones. Para
ello se puede encadenar una sentencia else con un nuevo condicional. A su vez
la nueva sentencia if puede ser completada por un else*/

$hora = 14;
if ($hora==8) {
	echo "es la hora de desayunar. ";
} elseif ($hora==14){
	echo "es la hora de la comida.";
} elseif ($hora==21) {
	echo "es la hora de la cena.";
}else{
	echo "Ahora no toca comer.";
}
echo "<br> <br>";

/*OPERADOR TERNARIO (condicion) ?evaluacion 'true' : 'false'
Otra forma muy útil de utilizar la estructura condicional if es la siguiente */

$v= 1;
$r= (1==$v) ? 'Yes' : 'Not'; //a $r se le asigna el valor yes
$r= (3==$v) ? 'Yes' : 'Not'; //a variable $r se le asigna el valor de not
echo (1==$v) ? 'Yes' : 'Not';

echo "<br>";
//seria algo equivalente a :
$v=1;
if (1==$v) {
	$r= 'Yes'; 
} else {
	$r='Not';
}if (1==$v) {
	echo "Yes";
} else {
	echo "Not";
}
echo "<br><br>";

/* instrucción switch la usaremos para elegir entre varias posibles soluciones, alternativa a un if..*/
$hora=14;
switch ($hora) {
	case '9':
		echo "es la hora de despertarse";
		break;
	case '14':
		echo "es la hora de la comida";
		break;
	case '18':
		echo "es la hora de la merienda";
		break;
	case '21':
		echo "es la hora de dormir";
		break;
	
	default:
		echo "no es la hora de comer";
		break;
}
echo "<br><br>";
$hora = 19; // La hora en formato de 24 horas
switch($hora) {
case 24:
case 23:
case 22:
echo "Ya he cenado.";
case 21:
case 20:
case 19:
case 18:
case 17:
case 16:
case 15:
echo "Ya he comido.";
case 14:
case 13:
case 12:
case 11:
case 10:
echo "Ya he desayunado.";
break;
default:
echo "Tengo hambre";
break;
}




 ?>