<?php 
/*ejemplo de recursividad la función llama a la propia función. Práctica peligrosa pero útil para la resolución de complejos problemas. Importante poner fin a las llamadas se corre el peligro de generar un sin fin de llamadas a la propia función*/
function factorial($n){
	if ($n <=1) {
		return 1;
	} else {
		return $n*factorial($n-1);
	}
	
}

echo factorial(4);
 ?>
