<!-- Práctica 2.5. ¿Serías capaz de modificar el programa anterior para poner en
negrita las etiquetas de la ficha? Pista: Fíjate en como se pone un salto de línea
en PHP y recuerda que la etiqueta para poner negritas en HTML es <b> ... </b> -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php 
$nombre = '<b>Juan</b>';
$apellidos = '<b>Palomo Garcia</b>';
$edad ='<b>23 años</b>';
$domicilio = '<b>C/América 33</b>';
$codigoPostal = 34017;
$telefono = 596209934;
$profesion = '<b>Programador</b>';
echo "Nombre: " .$nombre . "<br>";
echo "Apellidos: " .$apellidos . "<br>";
echo "Edad: " .$edad . "<br>";
echo "Domicilio: " .$domicilio . "<br>";
echo "Código Postal: " . "<b>".$codigoPostal."</b>" . "<br>";
echo "Teléfono: " ."<b>".$telefono."</b>" . "<br>";
echo "Profesión: " .$profesion . "<br>";
 ?>
</body>
</html>