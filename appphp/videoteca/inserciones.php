<?php
include 'conexionObjeto.php';
// $videoteca = new mysqli('localhost','root','','videoteca');
// if ($videoteca->errno !=0) {
//     echo ('error en la conexion');
//     exit();
// }

$titulo = "Ocean's Eleven";
$titulo = $videoteca->real_escape_string( $titulo); //Escapa caracteres especiales en una cadena para su uso en una sentencia SQL



$consulta= "INSERT INTO peliculas (" .
    "  titulo," .
    "  idSoporte," .
    "  idGenero" .
    ")" .
    "VALUES (" .
    "  '" . $titulo . "'," .
    "  1," .
    "  2".
    ")";

$resultado =$videoteca->query($consulta);

if ($resultado == FALSE) {
    echo ('error en la consulta');
    echo($videoteca->errno);
}

$videoteca->close();

?>