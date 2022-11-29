<?php 
//nombre, valor,caducidad de la cookie
 
setcookie("micookie","valor de la cookie caduca en un año",time() + (60*60*24*365));
//ruta donde la cookie tendrá validez. Todo el dominio
setcookie("micookie2","Cookie con validez para todo el dominio",time() + (60*60*24*365),"/");
//ruta donde la cookie tendrá validez. Directorio concreto
setcookie("micookie3","Cookie con validez para directorio concreto",time() + (60*60*24*365), "http://localhost/clase/practicas/ejerciciosUnidad3/cookies/verCookies.php");
//cookie con validez en todo el dominio y subdominio 
// setcookie("micookie4","esta cookie sirve para todos los subdominios",time() + (60*60*60*24*30),,"/",".desarolloweb.com");
// 
// set cookie devuelve un booleano si se creo con éxito
if (setcookie("micookie5","valor de prueba", time()+(60*60*60*24*7),"/")){
	echo "se ha creado la cookie con exito";
}else{ 
	echo "No se pudo crar la cookie";
	}
 ?>

<a href="verCookies.php">Ver la cookie que acabo de crear</a>