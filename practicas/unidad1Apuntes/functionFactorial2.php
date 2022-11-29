<?php 
/*Otra forma de abordar la recursividad mediante un bucle for. Es más rápida y menos voluminosa abordar un problema de recursividad mediante la solución iterativa*/
function factorial2($n){
	$res=1;
	for ($i=1; $i<=$n ; $i++) { 
		$res*=$i;
	}
	return $res;
}

echo factorial2(4);
 ?>