<!--  
mostrar_carrito(): esta función produce una tabla HTML realizando
un recorrido por la cookie carrito ( $_COOKIE['carrito']). En cada fila se debe
incluir la referencia del artículo, y la cantidad adquirida por el momento.
Finalmente se muestra el total de productos incluidos en la “cesta de la
compra”. Si el carrito está vacío deberemos indicarlo.
 
escaparate(): esta función genera una tabla HTML que en cada fila
muestra  la  referencia, la  descripción  y  el precio  de  cada  producto
(invéntaros esta información por ahora), junto con un enlace (“comprar”) el
cual nos permitirá incorporar otra unidad de dicho producto al “carrito de la
compra”. (enviando dicha referencia a  compra.php,  como ya hemos
comentado).
 -->
<?php 
session_start();
$aCarrito = array();
$sHTML = '';
$fPrecioTotal = 0;
$cantidad=0;

//Vaciamos el carrito
if(isset($_GET['vaciar'])) {
	unset($_COOKIE['carrito']);
}
//me guardo lo que me llega por GET-----------------probando
//
//
//$cantidad =$_COOKIE['carrito'][$art] +1




// $cantidad=0;
// $nombre= $_GET['nombre'];
// $precio= $_GET['precio'];
// $carrito[]= array('nombre' =>$nombre,'precio' =>$precio);
// if (isset($_COOKIE['carrito'])){  //le preguntamos si la variable de sesion carrito existe
//    $mi_carrito= $_COOKIE['carrito'];
//    $cantidad =$_COOKIE['carrito'][$mi_carrito] +1 ;//guardamos en la variable mi_carrito con los datos de Sesion que es un array de los datos del carrito
//   }
//  //creamos cookie
// setcookie("carrito[$art]", $cantidad,time()+3600);

// for ($i=0; $i <count($mi_carrito) ; $i++) { 
// 	echo $mi_carrito[$i]['nombre'];
// 	echo $mi_carrito[$i]['precio'];
// }


// //esto de la cantidad es dudoso
// for ($i=0; $i <count($mi_carrito) ; $i++) { 
// 	$cantidad= $mi_carrito[$i];
// }

// ///////probando
//vaciamos
if(isset($_GET['vaciar'])) {
	unset($_COOKIE['carrito']);
}

//Obtenemos los productos anteriores

if(isset($_COOKIE['carrito'])) {
	$aCarrito = unserialize($_COOKIE['carrito']);
}

//Anyado un nuevo articulo al carrito  

if(isset($_GET['nombre']) && isset($_GET['precio'])) {
	$iUltimaPos = count($aCarrito);
	$aCarrito[$iUltimaPos]['nombre'] = $_GET['nombre'];
	$aCarrito[$iUltimaPos]['precio'] = $_GET['precio'];
}

//Creamos la cookie (serializamos)

$iTemCad = time() + (60 * 60);
setcookie('carrito', serialize($aCarrito), $iTemCad);


//cantidad de productos
for ($i=0; $i <count($aCarrito) ; $i++) { 
	$cantidad= $aCarrito[$i];
}
//Imprimimos el contenido del array--------------

foreach ($aCarrito as $key => $value) {
	$sHTML .= '-> ' . $value['nombre'] . ' ' . $value['precio'] . '<br>';
	$fPrecioTotal += $value['precio'];

}

//Imprimimos el precio total------------------------

$sHTML .= '<br>------------------<br>Precio total: ' . $fPrecioTotal



?>

