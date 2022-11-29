<?php 
function conectar_db(){
	try {
		$con=new PDO('mysql:host=localhost;dbname=clientes_db','jefe','jefe');
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (Exception $e) {
		echo "Error concectando con la base de datos" . $e->getMessage();
	}
	return $con;
}

function desconectar_db($con)
{
  $con=null;
}
function LetraNIF ($dni) {
  $posicion= intval($dni%23);
  $letras= "TRWAGMYFPDXBNJZSQVHLCKEO";
//nos quedamos con el valor que encuentra en la posición indicada dentro de la cadena letras
  $letraNif= substr ($letras, $posicion, 1);
  return $letraNif;
}
function comprobarEmail($email){
  $posicion_arroba = strpos($email, "@");
// Busca la aparición de un punto (.) partir de la arroba
  $posicion_punto = strpos($email, ".", $posicion_arroba);

  if ($email == trim($email)) {
//	echo "El email es correcto pues no tiene espacios en blanco";
  } else{
   echo "Debe escribir su email sin espacios en blanco";
 }
 echo "<br>";
 if ($posicion_arroba && $posicion_punto) {
//echo "Es una dirección de email válida<br>";
  $usuario = substr($email, 0, $posicion_arroba);
  $dominio = substr($email, $posicion_arroba + 1);

} else {
  echo "No es una dirección de email válida<br>";
  if (!$posicion_arroba) {
    echo "Le falta el caracter arroba<br>";
  }
  if (!$posicion_punto) {
    echo "El dominio no es válido<br>";

  } 

}
return $email;
}
//  $email="sandra@gmail.com";
// //es_valido_email($email);
//  comprobarEmail($email);
//  var_dump($email);





function dni_valido($dni){
  $letra = substr($dni, -1);
  $numeros = substr($dni, 0, -1);
  $valido;
  if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
    $valido=true;
  }else{
    echo "dni incorrecto";;
  }
  return $dni;
}
?>

