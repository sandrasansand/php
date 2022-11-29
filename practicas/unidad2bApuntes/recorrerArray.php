<!-- Ejemplo 3.3.7. Recorriendo un array para modificar todos sus elementos. Aquí se usan dos arrays que están relacionados por sus posiciones. -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>arrays</title>
</head>
<body>

<?php 
$nombres = array("Juan","Inés","Andrea","Roberto");
$edades = array(33,28,45,52);
for ($i=0; $i <count($edades) ; $i++) { 
	echo "$nombres[$i] tiene $edades[$i] años.";
}
echo "<br>";
for ($i=0; $i < count($edades); $i++) { 
	$edades[$i]++;
}
echo "Ha pasado un año...<br>";
for ($i=0; $i <count($edades) ; $i++) { 
	echo "$nombres[$i] tiene $edades[$i] años.";
}

 ?>	
</body>
</html>


