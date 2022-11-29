<!--  Página dinámica en PHP que reciba el archivo (del form) y lo guarde en el disco duro. Esto se hace en 3 pasos:
 El servidor guarda el archivo en un fichero temporal.
 Movemos   el   archivo   a   la   posición   definitiva   usando   la   función
move_uploaded_file().  Esto es imprescindible ya que pasado cierto tiempo el servidor web eliminará automáticamente el fichero temporal.
 Si la operación de mover el archivo falla mostramos un mensaje de error. -->


<?php 
$temporal= $_FILES["miarchivo"]["tmp_name"];
$destino="uploads/" .$_FILES["miarchivo"]["name"];
if (move_uploaded_file($temporal,$destino)) {
	echo "Archivo subido con éxito";
}else{
	echo "Ocurrió un error, no se ha podido subir el archivo";
}


 ?>