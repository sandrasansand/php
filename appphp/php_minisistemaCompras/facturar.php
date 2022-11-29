<? include_once("verificarSesion.php"); ?>

 <h3> Factura para esta compra </h3>
 <form method="post" action="index.php">
  Cliente <?echo $clientazo?> <br>
  Unidades | Articulo | Precio x Unidad | Total
 <div id="catalogo">
 <?
   $suma=0;
   for($j=1;$j<sizeof($carrito);$j++){
     list($id,$desc,$cant,$clientesillo,$pu) = explode(":",$carrito[$j]);
     if($id!="null"){
       $sub = $cant*$pu;
       echo "$cant | $desc | $pu | $sub<br>";
       $suma+=$sub;
     }
   }
   echo "<br>SubTotal: $suma <br> IVA: ".($suma*0.15)."<br> Total: ".($suma*1.15);
   session_destroy();
 ?>
 </div>
 ¡Gracias por su compra!<br>
 En breve un empleado de nuestra company llegara hasta su domicilio<br>
 para entregarle los articulos de su compra<br>
 aceptamos todas las tarjetas de credito<br>
 <input type="submit" name="acc" value="Regresar al inicio">
 </form>