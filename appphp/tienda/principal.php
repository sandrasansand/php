<?php
 include("conecta.php"); ?>	 
	 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
 <h1>Mi tienda Online</h1>
 <form name="form2"  action="pidoDatos.php" method="post">
  <input type="submit" name="login" id="login" value="login" />
  
 </form>
	
<?php
$a=verListadoProductos('comprar');
//llamada a la funcion verListadodeProductos y le pasamos el modo comprar. Con el cuerpo de principal hemos creado la función
//que podrá redirigirnos al modo editar buscar.php
?>   
	     <p><a href="carrito.php">Ver carrito</a></p>  
</body>
</html>