<?php 
include 'funciones.php';
$conexion=conectar_db();

if (isset($_POST['Enviar'])){
	if (empty($_POST['dni'])) {
		echo "El dni no puede estar vacío";
	}else{
		$dni=$_POST['dni'];
	// if (strlen($dni) != 9) {
	// 	echo "el dni se compone de 8 numeros y una letra.";
    dni_valido($dni);
  } if (empty($_POST['nombre'])) {
    echo "el campo nombre no puede estar vacío";
  } else{
    $nombre=$_POST['nombre'];
  }
  if (empty($_POST['direccion'])) {
    echo "el campo direccion no puede estar vacío";
  } else{
    $direccion=$_POST['direccion'];
  }if (empty($_POST['localidad'])) {
    echo "el campo localidad no puede estar vacío";
  } else{
    $localidad=$_POST['localidad'];
  }if (empty($_POST['provincia'])) {
    echo "el campo provincia no puede estar vacío";
  } else{
    $provincia=$_POST['provincia'];
  }if (empty($_POST['telefono'])) {
    echo "el campo telefono no puede estar vacío";
  } else{
    $telefono=$_POST['telefono'];
  }if (empty($_POST['email'])) {
    echo "el campo email no puede estar vacío";
  } else{
    $email=$_POST['email'];
    comprobarEmail($email);
  }

  $sql="INSERT INTO clientes (dni,nombre,direccion,localidad,provincia,telefono,email) Values(
  '".$dni."',
  '".$nombre."',
  '".$direccion."',
  '".$localidad."',
  '".$provincia."',
  '".$telefono."',
  '".$email."')";

  $respuesta=mysqli_query($conexion,$sql);
  if($respuesta){
    header('Location:index.php');
  }
  else{
   echo("insercción fallida");
 }  
}
?>

<form name="frm_Ncliente" method="post" action="">

  <strong>Dni:</strong><br/>
  <input type="text" name="dni" size="9" maxlength="9"><br>
  <strong>Nombre:</strong><br/>
  <input type="text" name="nombre"><br/>
  <strong>Direccion:</strong><br/>
  <input type="text" name="direccion"><br/>
  <strong>Localidad:</strong><br/>
  <input type="text" name="localidad"><br/>
  <strong>Provincia:</strong><br/>
  <input type="text" name="provincia"><br/>
  <strong>Teléfono:</strong><br/>
  <input type="text" name="telefono"><br/>
  <strong>Email:</strong><br/>
  <input type="text" name="email"><br/>

  <input type="submit" value="enviar" name="Enviar" title="Enviar" />
  &nbsp;||&nbsp;
  <input type="reset" value="borrar" name="borrar" title="borrar" />
</form>
