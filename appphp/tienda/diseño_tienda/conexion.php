<?php
function conectar_db(){

    $server = "localhost";
    $user = "root";
    $pass = "alumno";
    $bd = "tienda";


    $conexion = mysqli_connect($server, $user, $pass,$bd) 
        or die("Ha sucedido un error inexperado en la conexion de la base de datos". mysqli_connect_error());

    return $conexion;
} 

?>