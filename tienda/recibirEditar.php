<?php
 include("conecta.php");
  $con=conectar_db();
 ?>
 
<?php

$id= $_POST['id'];             //lo primero capturamos todas las variables que nos vienen por Post desde conecta.php , 
//$imagen= $_POST['imagen'];                        
$nombre= $_POST['nombre'];   //me llegan del form id=compra action=editar.php        //entrando como administrador 
$desc= $_POST['descripcion'];
$precio= $_POST['precio'];
$stock= $_POST['stock'];
$fecha= $_POST['fecha'];

$rutaEnServidor= 'imagenes';  //esta es la parte del servidor para subir imagenes
$rutaTemporal= $_FILES['imagen2']['tmp_name'];
$nombreImagen=$_FILES['imagen2']['name'];
$rutaDestino= $rutaEnServidor.'/'.$nombreImagen;  //esto es lo mismo que decir imagenes/aloe.jpg //donde queremos que copie la imagen ../ salir de la carpeta productos e ir a imagenes

if ($_FILES['imagen2']['name']<>""){
   // echo 'intento cambiar la imagen';
    move_uploaded_file($rutaTemporal,$rutaDestino); //si el usuario intentó guardar la imagen la subo con uploaded al servidor ../
   $a=grabarCambios($id,$nombre,$desc,$precio,$stock,$rutaDestino,$fecha); // y guardo los cambios
} else{
   // echo 'no intento cambiar imagen';  //si el usuario no intentó cambiar la imagen 
    $recuperoArray=EncontrarReg($id); //busco el registro y recupero los datos
    $rutaDestino=$recuperoArray['imagen'];  //le asigno la imagen que ya tenía antes.
    $a=grabarCambios($id,$nombre,$desc,$precio,$stock,$rutaDestino,$fecha); //la rutaDestino será la misma de la imagen anterior 
}
?>

 <html>
  <head>
                <meta http-equiv="refresh" content="3; url= buscar.php"> 
                
               </head>
 </html>