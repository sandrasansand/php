<?php 
include("cripto.php");


$frase= $_POST['Mensaje'];
$desplazamiento= $_POST['Desplazamiento'];

$Codificado=codificar($frase,$desplazamiento);	//Cifrar
$Mensaje=descodificar($Codificado,$desplazamiento);		//Decifrar

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Recepción de datos</title>
</head>
<body>

	<p><strong>La frase a codificar es :</strong></p> <?= $frase ?> <br>
	<p><strong>El numero de desplazamiento es :</strong> </p> <?= $desplazamiento ?><br>
	<p><strong>La frase codificada es :</strong></p> <?= $Codificado ?><br>
	<p><strong>La frase descodificada es :</strong></p> <?= $Mensaje ?><br>
</body>
</html>

