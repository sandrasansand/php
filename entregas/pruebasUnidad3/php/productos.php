<?php 
session_start(); //Inicio sesion 
// if(isset($_POST['nombre'])){ 
// $nombre = $_POST['nombre']; 
// $_SESSION['usuario'] = $nombre; //Guardo el nombre del usuario en sesion 
// //session_register('pedido'); 
// }
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
} echo "Bienvenido : ".$_SESSION['usuario'];
?> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head> 
<body> 
<form action="productos.php" method="post"> 
<input type="hidden" name="agregar"> 
<table border="1"> 
<tr>
    <th>Referencia</th>
    <th>Descripción</th> 
    <th>Precio</th>

  </tr>

   <tr>
    <td>Ref1</td>
    <td>Descripción del artículo 1</td>
    <td>5</td>
<td><input type="submit" name="Ref1" id="button" value="comprar"></td>
   </tr>
</tr>
  <tr>
    <td>Ref2</td>
    <td>Descripción del artículo 2</td>
    <td>3</td>
<td><input type="submit" name="Ref2" id="button2" value="comprar"></td> 
  </tr> 
<tr>
    <td>Ref3</td>
    <td>Descripción del artículo 3</td>
    <td>2</td>
<td><input type="submit" name="Ref3" id="button3" value="comprar"></td> 
</tr> 

</table> 
</form>


<form action="productos.php" method="get"> 
<h1>En el carrito de compras tiene los siguientes productos</h1> 
<input type="hidden" name="quitar"> 
<?php 
if(!empty($_SESSION['pedido'])){ //Si hay productos en el carrito
foreach($_SESSION['pedido'] as $prod => $unidades) { 
echo "llevas $unidades unidades del producto $prod". "\n";
echo "<input type='Submit' name='$prod' value='Quitar'><br>";

}


 
      
?>




</form> 
<form action="confirmar.php" method="post"> 
<input type='Submit' name='Comprar' value="Confirmar compra"> 
</form> 
<?php 
} 
?> 

</body> 
</html>