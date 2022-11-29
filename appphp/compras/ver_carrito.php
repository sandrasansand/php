<?php
// if (!isset($_SESSION["ocarrito"])){
//     $_SESSION["ocarrito"] = new carrito();
// }
include("carrito.php");

?>

<html>
<head>
    <title>Introduce Producto</title>
</head>

<body>

<?php
session_start();
$_SESSION["ocarrito"]->imprime_carrito();
?>
<br>
<br>
<a href="index.php">Volver</a>

</body>
</html>
