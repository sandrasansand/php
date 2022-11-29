<?php
echo "Comprueba si tus datos son correctos.<br><br>";
// $nombre = $_POST['nombre'];
// $nivel =$_POST['nivel'];
// $experiencia_bas=$_POST['basic'];
// $experiencia_cplus=$_POST['c_cplus'];
// $experiencia_java=$_POST['java'];
// $opinion=$_POST['opinion'];


echo "{$_REQUEST["nombre"]}.<br>";
echo "Nivel de internet: {$_REQUEST["nivel"]}.<br>";
if ( isset($_REQUEST["basic"])
 || isset($_REQUEST["c_cplus"])
     || isset($_REQUEST["java"]) )
{ 
 echo "Con experiencia en ";
 if (isset($_REQUEST["basic"])) echo "Visual Basic";
 if (isset($_REQUEST["c_cplus"])) echo "C/C++";
 if (isset($_REQUEST["java"]))  echo ", Java";
     
echo "<br>";
} 
else { 
echo "Sin experiencia previa en programación.<br>";
}
echo "<br>OPINIÓN SOBRE EL CURSO:<br>";
echo nl2br($_REQUEST["opinion"]) //convierte saltos de linea en <br> 
?>