<?php

$mysqli = new mysqli ('localhost','root','','videoteca');
if ($mysqli ->connect_errno){ //si errno es distino a 0
    echo ('Error en la conexi�n');
    exit();
}

$mysqli->set_charset('utf8');
$generos = $mysqli->query('SELECT * FROM genero'); //declaramos la variable $generos donde guardamos la consulta, el metodo
if ($generos== FALSE){                          // query() nos devuelve un conjunto de regitros
    $mysqli->close();
    echo ('error al realizar la consulta.');
    exit();
    
}
?>
<table border='1'>
<tr>
<th>Id </th>
<th>Nombre </th>
<th>Descripci�n</th>
</tr>
<?php
while($genero = $generos->fetch_row()){// el metodo fetch_row() sirve para recuperar los registros obtenidos uno por uno,
    printf('<tr>');
    printf("<td>%u</td><td>%s</td><td>%s</td>",
    $genero[0],$genero[1],$genero[2]); //dentro de una matriz. Recorremos $generos, guaradando en $genero cada
    printf('</tr>');
           }                                                    //registro [0] posicion de cero de la matriz.
 
    ?>
</table>
<?php
$generos -> close();
$mysqli -> close();


?>