<?php

include("carrito.php");

//autentificar sesiones 
if (isset($_GET['id'])){
    $id= $_GET['id'];
    $nombre= $_GET['nombre'];
    $precio= $_GET['precio'];
    $_SESSION["ocarrito"] = new carrito();
}
//nombre sesion....
session_start();
    
if (!isset($_SESSION["ocarrito"])){
        $_SESSION["ocarrito"] = new carrito();
    }
    
$_SESSION["ocarrito"]->introduce_producto($id,$nombre,$precio);
?>
<html>
<head>
    <title>Introduce Producto</title>
</head>
<body>

Producto introducido.
<br>
<br>
<a href="index.php"> Volver</a>
<br>
<br>
<a href="ver_carrito.php">Ver carrito</a>

</body>
</html>
