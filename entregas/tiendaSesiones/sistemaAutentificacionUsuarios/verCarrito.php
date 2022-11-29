<?php include 'funciones.php'; ?>

<!-- hacer tabla -->
<form action="" method="get"> 
<h1>En el carrito de compras tiene los siguientes productos</h1> 
<input type="hidden" name="quitar"> 

<?php 

if(!empty($_SESSION['pedido'])){ //Si hay productos en la session pedido
//llamo a la función y muestro lo que llevo
mostrarProductos();
?>
</form> 
<form action="confirmar.php" method="post"> 
<br>
<a href="tienda.php">Seguir comprando</a><br><br>
<input type='Submit' name='Comprar' value="Confirmar compra"> 
</form> 
<?php 
} 
?> 

 
      
