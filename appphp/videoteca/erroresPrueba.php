<?php 
$videoteca =mysqli_connect();

if (mysqli_connect_errno()){
	echo('Error en la conexión');  //error en las cabeceras mirarlo detenidamente o definir $mensaje $from $subject
	error_log("No se pudo conectar con mysql.",1,"sannnd.sa@gmail.com", "Subject: Error en la videoteca\n"."From: Servidor en producción\n");
	exit();
}




 ?>