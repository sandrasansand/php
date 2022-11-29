<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recibiendo datos y pasandolos a la funcion</title>
</head>
<body>

</body>
</html>

<?php 
include 'cripto.php';

$desplazamiento =$_POST['desplazamiento'];
$frase = $_POST['frase'];


codificar($desplazamiento,$frase);
//descodificar($desplazamiento,$frase);



 ?>