<?php 
//no existe una función específica de borrado de cookies. Lo hago variando la caducidad de la cookie a una fecha anterior.
//ejemplo time() - La hemos caducado restandole el tiempo
if (setcookie("micookie5","valor de prueba", time() - (60*60*60*24*7),"/")){
	echo "se ha borrado porque ha caducado";
}else{ 
	echo "No se pudo borrar la cookie";
	}

 ?>
 <a href="verCookies.php">Ir a la página de ver cookies</a>