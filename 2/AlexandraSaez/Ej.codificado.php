<html>
    <head>
        <title>formulario</title>
    </head>
<body>
<form name="formulario"  action="codificado.php" method="post">
<label>Frase: </label><input type="text" name="Mensaje" value="">
<label>Desplazamiento:</label> <input type="number" name="Desplazamiento"value="" >
<input type="submit" value="Enviar">
</form>
<?php 
include("cripto.php");

 
    $frase= $_POST['Mensaje'];
    $desplazamiento= $_POST['Desplazamiento'];
    




$Codificado=codificar($frase,$desplazamiento);	//Cifrar
$Mensaje=descodificar($Codificado,$desplazamiento);		//Decifrar
echo "<b>FRASE:</b> " .$frase."<br/><b>DESPLAZAMIENTO : </b>  " .$desplazamiento. ' <br/> <b>FRASE CODIFICADA: </b> '.$Codificado.' <br/><b> FRASE DESCODIFICADA: </b> '.$Mensaje;
?>

</body>


</html>

