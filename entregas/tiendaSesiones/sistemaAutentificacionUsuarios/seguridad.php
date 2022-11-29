<?php 
//Cierre de sesión por inactividad en PHP: módulo de seguridad
//inicio sesión
session_name('loginUsuario');
session_start();

//compruebo si es ususuario autentificado
if ($_SESSION['autentificado'] != 'SI') {
	//si no existe reenvio a pag autentificacion
	header('Location:index.php');
}else{
//calculamos el tiempo transcurrido- en control de datos ya le pasamos funcion.
//strotime toma como unidad de medida el segundo--- (el tiempo trasncurido = a la hora actual - la fecha guardada)
$fechaGuardada =$_SESSION['ultimoAcceso'];
$ahora= date("Y-n-j H:i:s");
$tiempo_trasncurrido=(strtotime($ahora)-strtotime($fechaGuardada));
//comparamos el tiempo transcurrido 600s = 10mnts
if ($tiempo_trasncurrido >=600) {
	//si pasaron 10m o mas
	session_destroy();
	header('Location:index.php');
}else{
	//actualizo la fecha de la sesion
	$_SESSION['ultimoAcceso'] = $ahora;
}
}
 ?>