<?php 

if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
	echo "Ingresa un usuario y nombre válido";


  }
?>
	<html>
               <head>
                <meta http-equiv="refresh" content="7; url= index.php">
                
               </head>
                <html>   

<?php 
//comprobación si es válido usuario y constraseña
if ($_POST['usuario']== 'Pepa' && $_POST['contrasena']=='Abc_45') {
//asigno un nombre a la sesion para poder guardar diferentes datos
session_name('loginUsuario');
session_start();
//defino sesión y guardo datos
$_SESSION['autentificado']='SI';
//defino la sesion que demuestra q el usuario está autorizado y defino fecha y hora de inicio de sesión en formato aaaa-mm-dd hh:mm:ss
$_SESSION['ultimoAcceso']=date("Y-n-j H:i:s");
header('Location:aplicacion.php');
}else{
	//si no existe le reenvio a la portada
//header('Location:index.php?errorusuario=si');
}

 ?>