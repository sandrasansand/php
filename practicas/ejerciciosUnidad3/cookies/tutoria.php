<?php 
$cantidad=1;
//comprar..
////me llega el $art='ref1';
//comprobar si existe la cookie

if (isset($_COOKIE ['carrito'][$art])) {
	$cantidad =$_COOKIE['carrito'][$art] +1;
}

setcookie("carrito[$art]", $cantidad,time()+3600);
 ?>