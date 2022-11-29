<?php 
session_start(); 
if(isset($_POST['agregar'])){ //Si se envió el primer formulario 
	$claves = array_keys($_POST); 
	$producto = $claves[1]; 
 if(!is_array($_SESSION['pedido'])) //Si no es un array 
 {
 	$_SESSION['pedido'] = array();
 }
 if(array_key_exists("$producto",$_SESSION['pedido'])){ 
 	$cantidad = $_SESSION['pedido']["$producto"]; 
 	$_SESSION['pedido']["$producto"] = ++$cantidad; 
 } 
 else { 
 	$_SESSION['pedido']["$producto"] = 1; 
 } 
} 
if(isset($_GET['quitar'])){ //Si se envió el segundo formulario 
	$claves = array_keys($_GET); 
	$producto = $claves[1]; 
unset($_SESSION['pedido'][$producto]); //Eliminar la posicion del arreglo 
}

function mostrarProductos(){
	
	foreach($_SESSION['pedido'] as $prod => $unidades) { 
		echo "<p> $unidades unidades del producto $prod </p>". "\n";
		echo "<input type='Submit' name='$prod' value='Quitar'><br>";
	}

}

function mostrarCompra(){
	foreach($_SESSION['pedido'] as $prod => $unidades) { 

		echo "<p align='center' >$unidades  $prod </p>"; 
	}
}

?> 
