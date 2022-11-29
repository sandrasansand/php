<!-- Añadir un artículo al carrito: pulsando sobre el enlace comprar que
acompaña a cada artículo se producirá la ejecución del script compra.php,
que debe recibir por url la referencia del artículo seleccionado, e introducirlo
en el carrito. Una vez realizada esta operación, provoca de nuevo la
ejecución del script tienda.php 

El script compra.php, al que se llega al hacer click en “Comprar” recibe la
referencia del artículo  por query string, y actualiza el valor de la cookie,
redirigiendote tienda.php una vez ha realizado su faena. Este será un
script “transparente” para el usuario, ya que lo que el usuario percibe es que
cuando pincha en comprar, se queda en la misma página pero se actualiza
la cantidad de artículos comprados

-->

<?php 
session_start(); //Inicio sesion 
if(isset($_POST['nombre'])){ 
$nombre = $_POST['nombre']; 
$_SESSION['usuario'] = $nombre; //Guardo el nombre del usuario en sesion 
//session_register('pedido'); 
}
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
 echo "Bienvenido : ".$_SESSION['usuario'];

if(!empty($_SESSION['pedido'])){ //Si hay productos en el carrito
foreach($_SESSION['pedido'] as $prod => $unidades) { 
echo "llevas $unidades unidades del producto $prod". "\n";
echo "<input type='Submit' name='$prod' value='Quitar'><br>";

}
}
?>