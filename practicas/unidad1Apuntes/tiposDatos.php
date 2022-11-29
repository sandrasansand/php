<?php 
//variable
$telefono= "684215572"; //permite definir el tipo de dato en función del contenido asignado 
echo "$telefono";
echo "<br>";

//constante
define("PI", 3.14);
echo PI;//no se pone el simbolo $ puesto que no es una variable y sin ""
echo "<br>";

/*operadores pueden ser unarios, binarios y ternarios Lo habitual es clasificar a los operadores según el tipo de cálculo o manipulación que realizan. */

echo "La variable z vale:";
$z = 1+5; //los datos se introducen directamente
echo "$z";
echo "<br>";

echo "La variable z vale:";
$x=2;
$y=3;
$z= $x + $y; //los datos están almacenados en variables
echo "$z";
echo "<br>";

echo "La variable z vale:";
$z = $x+$z; //la variable $z aparece en la experesion 2+5
echo "$z";
echo "<br>";

//operadores aritmecos + - * / %  -negacion de variable <>distinto !
echo "El resultado de calcular 5 módulo 3 es ";
$z = 5 % 3;
echo $z;
echo
"<br>";
echo "El resultado de cambiar el signo a la variable $z es ";
$z = -$z;
echo $z;
echo "<br><br>";




//operadores compración
echo "¿Es 5 igual a 3? ";
if (5 == 3) {
echo "TRUE";
} else {
echo "FALSE";
}
echo "<br>";

echo "¿Es 5 igual a 5.0? ";
if (5 === 5.0) { //igual estricto mismo tipo de dato
	echo "TRUE";
} else {
	echo "FALSE";
}

echo "<br>";
echo "¿Es 5 igual a 5.0? ";
if (5 == 5.0) { //igual aunque sea distinto tipo de dato
	echo "TRUE";
} else {
	echo "FALSE";
}


echo "<br>";
echo "¿Es 5 diferente a 3? ";
if (5 != 3) {
echo "TRUE";
} else {
echo "FALSE";
}
echo "<br><br>";
echo "El resultado del operador <> es distinto 5 que 3 <br>";
if (5 <> 3) {
	echo "Son distintos";
} else {
	echo "son iguales";
}
echo "<br>";

echo "¿Es 5 menor que 3? ";
if (5 < 3) {
echo "TRUE";
} else {
echo "FALSE";
}
echo "<br>";

echo "¿Es 5 mayor que 3? ";
if (5 > 3) {
echo "TRUE";
} else {
echo "FALSE";
}
echo "<br>";
echo "<br>";
 ?>

<!-- operadores lógicos ejemplo de tabla de la verdad operador AND && devuelve verdadero
si los dos operandos son verdaderos -->
<font face="Courier New">

<?php 

echo "Tabla de verdad del operador AND &&";
echo "<br>";
echo "devuelve verdadero si los dos operandos son verdaderos";
echo "<br>";
echo "<br>";
echo "opdo1 | opdo2 |opdo1 AND opdo2";
echo "<br>";
echo "------+-------+----------------";
echo "<br>";
echo "TRUE. | TRUE. | ";
if (TRUE && TRUE) {
echo "TRUE.";
} else {
echo "FALSE";
}
echo "<br>";

echo "TRUE. | FALSE | ";
if (TRUE && FALSE) {
echo "TRUE.";
} else {
echo "FALSE";
}
echo "<br>";
echo "FALSE | TRUE. | ";
if (FALSE && TRUE) {
echo "TRUE.";
} else {
echo "FALSE";
}
echo "<br>";
echo "FALSE | FALSE | ";
if (FALSE && FALSE) {
echo "TRUE.";
} else {
echo "FALSE";
}
echo "<br>";
echo "<br>";
?>
 </font>



 <!-- operadores lógicos ejemplo de tabla de la verdad operador OR || Devuelve verdadero si al menos uno de los operandos es verdadero.-->
<font face="Courier New">

<?php 

echo "Tabla de verdad del operador OR || ";
echo "<br>";
echo "Devuelve verdadero si al menos uno de los operandos es verdadero";
echo "<br>";
echo "<br>";
echo "opdo1 | opdo2 |opdo1 OR opdo2";
echo "<br>";
echo "------+-------+----------------";
echo "<br>";
echo "TRUE. | TRUE. | ";
if (TRUE || TRUE) {
echo "TRUE.";
} else {
echo "FALSE";
}
echo "<br>";

echo "TRUE. | FALSE | ";
if (TRUE || FALSE) {
echo "TRUE.";
} else {
echo "FALSE";
}
echo "<br>";
echo "FALSE | TRUE. | ";
if (FALSE || TRUE) {
echo "TRUE.";
} else {
echo "FALSE";
}
echo "<br>";
echo "FALSE | FALSE | ";
if (FALSE || FALSE) {
echo "TRUE.";
} else {
echo "FALSE";
}
echo "<br>";
?>
 </font>



 <!-- operadores lógicos ejemplo de tabla de la verdad operador AND && devuelve verdadero
si los dos operandos son verdaderos --> 

 <!-- operadores lógicos ejemplo de tabla de la verdad operador XOR exclusivo Devuelve verdadero si  uno de los operandos es verdadero pero no ambos.-->
<font face="Courier New">

<?php 

echo "Tabla de verdad del operador XOR  ";
echo "Devuelve verdadero si  uno de los operandos es verdadero pero no ambos.";
echo "<br>";
echo "<br>";
echo "opdo1 | opdo2 |opdo1 XOR opdo2";
echo "<br>";
echo "------+-------+----------------";
echo "<br>";
echo "TRUE. | TRUE. | ";
if (TRUE XOR TRUE) {
echo "TRUE.";
} else {
echo "FALSE";
}
echo "<br>";

echo "TRUE. | FALSE | ";
if (TRUE XOR FALSE) {
echo "TRUE.";
} else {
echo "FALSE";
}
echo "<br>";
echo "FALSE | TRUE. | ";
if (FALSE XOR TRUE) {
echo "TRUE.";
} else {
echo "FALSE";
}
echo "<br>";
echo "FALSE | FALSE | ";
if (FALSE XOR FALSE) {
echo "TRUE.";
} else {
echo "FALSE";
}
echo "<br>";
echo "<br>";
?>
 </font>

 <!-- operadores lógicos ejemplo de tabla de la verdad operador ! negación Devuelve verdadero si el operando es falso y falso si es verdadero.-->
<font face="Courier New">

<?php 

echo "Tabla de verdad del operador !  ";
echo "<br>";
echo "Devuelve verdadero si el operando es falso y falso si es verdadero";
echo "<br>";
echo "<br>";
echo "------+-------+----------------";
echo "<br>";
$s= !TRUE;
var_dump($s);
echo "Negación de true";
echo "<br>";
$s= !FALSE;
var_dump($s);
echo "Negación de false";
?>
 </font>