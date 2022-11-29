<!-- Práctica 3.8. En esta práctica se pide crear una array asociativo con 
parejas  de  datos  nombres  de  persona  -  altura.  Luego  se  usará  una 
estructura foreach para recorrerlo y mostrar, por cada elemento del 
array, el mensaje correspondiente del tipo "María mide 1.75 m".  -->
<?php 

$nombres =array("Eva"=>1.64, "Antonio"=>1.72, "Felipe"=>1.80,"Rosa"=>1.70);
foreach ($nombres as $nombre => $altura) {
	echo "$nombre mide $altura <br>";
}

	


 ?>