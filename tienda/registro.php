

   <?php
 include("conecta.php");
   $con=conectar_db();
   ?>
<?php




$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$pass=$_POST['pass'];
$permisos=$_POST['permisos'];

$rutaEnServidor= 'imagenes';
$rutaTemporal= $_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino= $rutaEnServidor.'/'.$nombreImagen;  //esto es lo mismo que decir imagenes/aloe.jpg //donde queremos que copie la imagen ../ salir de la carpeta productos e ir a imagenes
move_uploaded_file($rutaTemporal,$rutaDestino);

$fecha=$_POST['fecha'];


$sql="INSERT INTO usuarios (email,nombre,usuario,pass,permisos,imagen,fecha) Values(
'".$email."',
'".$nombre."',
'".$usuario."',
'".$pass."',
'".$permisos."',
'".$rutaDestino."',
'".$fecha."')";

$respuesta=mysqli_query($con,$sql);


if($respuesta){
	echo("Registro con exito");
}
		else{
			echo("Registro fallido");
			
		}
   
?>  
 <html>
  <head>
                <meta http-equiv="refresh" content="3; url= galeria.php"> 
                
               </head>
 </html>