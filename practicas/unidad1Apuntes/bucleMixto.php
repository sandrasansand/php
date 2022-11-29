<?php 
$salir = FALSE;
$i=1;
while ($salir==FALSE && $i<=8) {
	$n=rand(1,500);
	echo ($n)."<br/>";
	$i++;
	$salir=($n%7==0);
}


 ?>