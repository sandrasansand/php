<?php
 include("conecta.php");

 ?>


<?php

session_start();

if ($_SESSION['miSession']['permisos']==1){       //usuario registrado en permiso 1 == administrador funcion desarrolada en conecta.php que hace todo lo referente al modo editar

 $a=verListadoProductos('editar');
}

if ($_SESSION['miSession']['permisos']==9){       //usuario registrado permiso 9 compra funcion desarrolada en conecta.php que hace todo lo referente al modo comprar

   ?>
 <html>
  <head>
                <meta http-equiv="refresh" content="1; url= galeria.php"> 
                
               </head>
<?php
}


?>


 	 
</table>
</body>
</html>