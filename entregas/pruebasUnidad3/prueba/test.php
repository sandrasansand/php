<?php 

$aCarrito = array();
$sHTML = '';
$fPrecioTotal = 0;

//Vaciamos el carrito

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



//Imprimimos el contenido del array

foreach ($aCarrito as $key => $value) {
	$sHTML .= '-> ' . $value['nombre'] . ' ' . $value['precio'] . '<br>';
	$fPrecioTotal += $value['precio'];
}

//Imprimimos el precio total

$sHTML .= '<br>------------------<br>Precio total: ' . $fPrecioTotal;

?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo de carrito</title>
</head>
<body>
	<div>
		<?php echo $sHTML; ?>
	</div>
	<ul>
		<li><a href="test.php?nombre=ref1&precio=10">Articulo 1</a></li>
		<li><a href="test.php?nombre=ref2&precio=20">Articulo 2</a></li>
		<li><a href="test.php?nombre=ref3&precio=30">Articulo 3</a></li>
		<li><a href="test.php?nombre=ref4&precio=40">Articulo 4</a></li>
		<li><a href="test.php?nombre=ref5&precio=50">Articulo 5</a></li>
		<li><a href="test.php?nombre=ref6&precio=60">Articulo 6</a></li>
		<li><a href="test.php?vaciar=1">vaciar carrito</a></li>
	</ul>	
</body>
</html>