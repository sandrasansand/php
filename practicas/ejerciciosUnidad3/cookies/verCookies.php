<?php 
//si existe micookie
if (isset($_COOKIE['micookie'])) {
	echo "Recibiendo el valor de la cookie que caduca en un año: <i><b>". $_COOKIE['micookie'] . "</i></b>";
}else{
	echo "No existe cookie";
}
echo "<br><br>";

if (isset($_COOKIE['micookie2'])) {
	echo "Recibiendo el valor de la cookie que caduca en un año para todo el dominio: <i><b>". $_COOKIE['micookie2'] . "</i></b>";
}else{
	echo "No existe cookie de la ruta completa del domino";
}
echo "<br><br>";

if (isset($_COOKIE['micookie3'])) {
	echo "Recibiendo el valor de la cookie que caduca en un año, para un directorio completo :<i><b>". $_COOKIE['micookie3'] ."</i></b>";
}else{
	echo "No existe cookie para un directorio concreto";
}
echo "<br><br>";

if (isset($_COOKIE['micookie5'])) {
	echo "Tengo la nueva cookie:<i><b>". $_COOKIE['micookie5'] ."</i></b>";
}else{
	echo "No existe la nueva cookie";
}
echo "<br><br>";
 ?>
<br>
<br>
<a href="crearCookies.php">Página donde creo las cookies</a>
<br>
<a href="borrarCookies.php">Ir a la página de borrado de cookies</a>