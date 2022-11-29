
<?php

function codificar($Mensaje,$Desplazamiento){ 	
	$Codificado="";
	for($i=0; $i<strlen($Mensaje); $i++)$Codificado.=chr((ord($Mensaje[$i])+$Desplazamiento)%255);
		return $Codificado;
}


function descodificar($Codificado,$Desplazamiento){  
	$Mensaje="";
	for($i=0; $i<strlen($Codificado); $i++)$Mensaje.=chr((ord($Codificado[$i])-$Desplazamiento+255)%255);
	return $Mensaje;
}


?>