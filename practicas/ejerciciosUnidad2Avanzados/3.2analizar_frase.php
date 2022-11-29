<?php 
function analizar_frase($cadena){
	$cadena=trim($cadena);
	$long=strlen($cadena);
	$pos=-1;
	$cuenta_espacios=-1;
	$ultimaPalabra=false;
	do {
		$pos=strpos($cadena," ",$pos+1);
		$cuenta_espacios++;
	} while ( $pos);
	echo "Frase a analizar:  $cadena <p>";
	echo "$long caracteres <br>";
	echo "$cuenta_espacios espacios en blanco<br>";
	echo $cuenta_espacios+1 . " palabras<br> ";
	$pos=0;
	do {
		$pos2=strpos($cadena," ",$pos);
		if (!$pos2) { //si no quedan espacios en blanco estamos en la ultima palabra
			$pos2=$long;
			$ultimaPalabra=true;
		}
		$palabra=substr($cadena, $pos,$pos2-$pos); //extrae palabra contenida entre dos espacios en blanco
		echo $palabra . " " . strlen($palabra). " letras<br>";
		$pos=$pos2+1;
	} while (!$ultimaPalabra);
}
analizar_frase("El perro de san Roque no tiene rabo");
?>