<!-- Ejemplo 3.4.6. Uno de sus usos habituales es redirigir hacia una página de
error, en caso de que haya fallos en los datos. Aquí se valida una dirección de
email, y si es incorrecta se reenvía a una página de error. -->


<?php
// Indica la posición del caracter "@" o FALSE si no está
$posicion_arroba = strpos($_REQUEST["email"], "@");
// Busca la aparición de un punto (.) a partir de la arroba
$posicion_punto = strpos($_REQUEST["email"], ".", $posicion_arroba);
if ($posicion_arroba && $posicion_punto) {
// Aquí vendría el código para guardar en la base de datos
header("location:confirmacion.html"); // Redirección
} else {
// Aquí vendría el código para guardar en la base de datos
header("location:error.html"); // Redirección
}
?>
