<!-- Ejemplo 3.1.6. Se muestran varias pruebas de extracción de caracteres de una cadena. -->

<?php 
$cadena = "Pernambuco";

echo "Cadena a analizar: '$cadena'<br>";
//caracter en la primera posición
echo "Caracter en la primera posición: '$cadena[0]'<br>";
echo strlen($cadena,); //metodo longuitud de la cadena
echo "<br>";

//En ocasiones nos interesará conocer la posición de la primera aparición de un carácter en una cadena. Si no se encuentra el carácter, devuelve FALSE.
echo "<br>";
$encontrar = 'e';
$posicion = strpos($cadena,$encontrar);
echo $posicion; 
echo "<br>";

//Alternativamente podemos indicarle la posición a partir de la cual queremos que empiece a buscar.
//$cadena2= "abcdefabcde";
$posicion = strpos($cadena,'a',3);
echo "Posición de un determinado carácter indicandole inicio desde el cual buscar método strpos() : ".$posicion;
echo "<br>";

// Habrá muchos casos en los que nos interesará extraer un trozo del texto de una cadena. Mediante esta función podemos extraer el fragmento ubicado entre las posiciones indicadas:
$extraccion = substr($cadena,2,7);
echo "extracción de cadena método substr() indicándole inicio y fin : " . $extraccion;







 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>extracción caracteres</title>
</head>
<body>
	
</body>
</html>