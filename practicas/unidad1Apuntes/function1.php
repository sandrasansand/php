<?php 
/* se puede indicar un valor a los parámetros a fin de q ese valor sea opcional, si se pasa el parámetro se toma el valor que se pasa si no se toma el valor por defecto.*/
function potencia($base, $exponente=2){
$valor=1;

	for ($i=1; $i <=$exponente ; $i++) { 
		$valor*=$base;
	}
	return $valor;
}
echo potencia(2,3);
echo "<br/>";
echo potencia(2);//toma el valor por defecto
?>