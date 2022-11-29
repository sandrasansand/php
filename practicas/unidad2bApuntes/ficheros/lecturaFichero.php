<!-- En este código se abre un fichero en modo de lectura. En
función de si se ha conseguido, se muestra un mensaje de confirmación o de
error. Finalmente el archivo se cierra. -->
<?php 
$ruta="http://localhost/clase/practicas/unidad2bApuntes/usoEcho.php";
$archivo =fopen($ruta, "r");
if ($archivo) {
	print "Archivo $ruta abierto para lectura. ";
}else{
	print "No se pudo abrir el archivo: $ruta ";
}
fclose($archivo);

 ?>