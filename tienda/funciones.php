<?php
function conectar_db(){

    $server = "localhost";
    $user = "root";
    $pass = "php74183@";
    $bd = "tienda";
    
/*
$server ="db738041399.db.1and1.com";
$user = "dbo738041399";
$pass = "Desarrolloweb123.";
$bd= "db738041399";
*/

    $conexion = mysqli_connect($server, $user, $pass,$bd) 
        or die("Ha sucedido un error inexperado en la conexion de la base de datos". mysqli_connect_error());

    return $conexion;
} 




$con= conectar_db();
define ('BASE_URL','http://localhost/clase/tienda/');  //minuto 16 eb adelante http://db738041399.db.1and1.com/dbo738041399

function base_URL($cad){
return BASE_URL.$cad;  //ESTA funcion concatena la base_url con la cadena que le pasemos
};


?>