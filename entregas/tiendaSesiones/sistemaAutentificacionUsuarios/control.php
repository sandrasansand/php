<?php 
//si me llega por post usuario y constrasena q esta vacío reedirigo a index en 7 segundos
if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {

	echo "<h2>Ingresa un usuario y nombre válido, serás redirigido al formulario de acceso a la aplicación.</h2>";
}
?>
<html>
<head>
	<meta http-equiv="refresh" content="7; url= index.php">
	
</head>
<html>   

<?php 
//comprobación si es válido usuario y constraseña-- he definido la entrada para un único usuario y única contraña
if ($_POST['usuario']== 'Pepa' && $_POST['contrasena']=='Abc_45') {
	
//asigno un nombre a la sesion para poder guardar diferentes datos
	session_name('loginUsuario');
	session_start();
//defino sesión y guardo datos
	$_SESSION['autentificado']='SI';
//defino la sesion que demuestra q el usuario está autorizado y defino fecha y hora de inicio de sesión en formato aaaa-mm-dd hh:mm:ss
	$_SESSION['ultimoAcceso']=date("Y-n-j H:i:s");
	header('Location:aplicacion.php');
}else{ //he obviado esta parte porque ya comprobe en la primera linea de código reedirigiendo a index.
	//si no existe le reenvio a la portada
//header('Location:index.php?errorusuario=si');
}

?>