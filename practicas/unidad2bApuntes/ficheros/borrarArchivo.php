<!-- Este programa intenta borrar un archivo y en el caso de no 
conseguirlo muestra un mensaje de error. -->

<?php 
if (!unlink("refranes.txt")) {
	echo "No se ha podido borrar el archivo";
}else{
	echo "Archivo borrado";
}

 ?>