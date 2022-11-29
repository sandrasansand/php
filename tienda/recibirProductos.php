    <?php
 include("conecta.php");
   $con=conectar_db();
   ?>
<?php
//INSERTAR PRODUCTOS SOLO SI ES USUARIO CON PERMISOS AUTENTIFICADO Y REGISTRADO
$rutaEnServidor= 'imagenes';
$rutaTemporal= $_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino= $rutaEnServidor.'/'.$nombreImagen;  //esto es lo mismo que decir imagenes/aloe.jpg //donde queremos que copie la imagen ../ salir de la carpeta productos e ir a imagenes
move_uploaded_file($rutaTemporal,$rutaDestino);


$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$desc=$_POST['descripcion'];
$stock=$_POST['stock'];
$fecha=$_POST['fecha'];

$sql="INSERT INTO products (imagen,nombre,descripcion,precio,stock,fecha) Values('".$rutaDestino."',
'".$nombre."',
'".$desc."',
'".$precio."',
'".$stock."',
'".$fecha."')";

$respuesta=mysqli_query($con,$sql);


if($respuesta){
	echo("insercción con exito");
}
		else{
			echo("insercción fallida");
		}
   
?>   
 <html>
  <head>
                <meta http-equiv="refresh" content="2; url= buscar.php"> 
                
               </head>
 </html>