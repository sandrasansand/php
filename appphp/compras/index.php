<?
if (!isset($_SESSION["ocarrito"])){
    $_SESSION["ocarrito"] = new carrito();
}
include("carrito.php");

?>

<html>
<head>
    <title>Trabajando con el carrito</title>
</head>

<body>

<a href="mete_producto.php?id=1&nombre=cd1&precio=14">cd1</a>
<br>
<br>
<a href="mete_producto.php?id=2&nombre=cd2&precio=29">cd2</a>
<br>
<br>
<a href="mete_producto.php?id=3&nombre=cd3&precio=15">cd3</a>
<br>
<br>
<a href="mete_producto.php?id=4&nombre=cd4&precio=20">cd4</a>
<br>
<br>
<a href="ver_carrito.php">Ver carrito</a>
<br>

 

</body>
</html>