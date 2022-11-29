<?php 
$videoteca = new mysqli('localhost','root','','videoteca');
// if ($videoteca->connect_errno !=0) {
//     echo ('error en la conexion');
//     exit();
//     
//     
if (mysqli_connect_errno()){   //error_log() función para ser consciente de los errores
	echo('Error en la conexión');
	error_log("No se pudo conectar con mysql.",1,"sannnd.sa@gmail.com", "Subject:Error en la videoteca\n"."From:Servidor en producción\n");
	exit();


}


// }

?>