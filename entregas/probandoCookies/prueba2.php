<?php 
include 'funciones.php';
 ?>

<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo de carrito</title>
</head>
<body>
<!--   hacer una tabla -->
	    <h1>Contenido del carrito</h1>
	<div>
		<?php echo $sHTML; ?><br>

 
	</div>


	<body> 

<!--     
<form action="prueba2.php" method="get"> 
<table border="1"> 
<tr>
    <th>Producto</th>
    <th>Descripción</th> 
    <th>Precio</th>

  </tr>

   <tr>
    <td>Producto 1</td>
    <td>Descripción del artículo 1</td>
    <td>10</td>
    <td><a href="prueba.php?nombre=producto1&precio=10">Comprar</td>

   </tr>
</tr>
  <tr>
    <td>Producto 2</td>
    <td>Descripción del artículo 2</td>
    <td>20</td>
    <td><a href="prueba.php?nombre=producto2&precio=20">Comprar</a></td>
    
  </tr> 
<tr>
    <td>Producto 3</td>
    <td>Descripción del artículo 3</td>
    <td>30</td>
    <td><a href="prueba.php?nombre=producto3&precio=30">Comprar</a></td>
    
</tr> 
</table>  -->

<br><br>
<a href="prueba.php">Seguir comprando</a>
<br></br>
<a href="prueba2.php?vaciar=1">vaciar carrito</a>

<br></br>
<a href="confirmar.php">Confirmar compra</a>

</body>
</html>