<?php 

function codificar($desplazamiento,$frase){

	$abecedario= array (0=>"a",1=>"b",2=>"c",3=>"d",4=>"e",5=>"f",6=>"g",7=>"h",8=>"i",9=>"j",10=>"k",11=>"l",12=>"ll",13=>"m",14=>"n",15=>"ñ",16=>"o",17=>"p",18=>"q",19=>"r",20=>"s",21=>"t",22=>"u",23=>"v",24=>"w",25=>"z");
$frase=$frase;
$desplazamiento= $desplazamiento;
$mensaje = "";

$fraseArray = str_split($frase);

for ($i=0; $i <count($fraseArray) ; $i++) { 
 //obtenemos indice que corresponde cada letra del mensaje en el array $abecedario
	$indice= array_search($fraseArray[$i], $abecedario);
	$indice_Final= $indice + $desplazamiento;

	if ($indice_Final > 25) {
		$diferencia = $indice_Final - 25 ;
	    $indice_Final = $diferencia-1 ;
	}
	if ($indice) {
		 $fraseArray[$i] = $abecedario[$indice_Final];
	}

	$mensaje .= $fraseArray[$i];
	
}
 echo "Frase con desplazamiento de : ". $desplazamiento. "<br>";
 echo "Frase original: ". $frase."<br>";
 echo "Frase codificada: $mensaje<br>";

}

//codificar(4,"za");

?>