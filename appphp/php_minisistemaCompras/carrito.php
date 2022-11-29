<? include_once("verificarSesion.php"); ?>

 <h3> Articulos cargados actualmente en el carrito </h3>
 <p>Seleccione la casilla del concepto que desee eliminar del carrito<p>
 <form method="post" action="">
  Unidades | Articulo | Precio x Unidad
 <div id="catalogo">
 <?
   for($j=1;$j<sizeof($carrito);$j++){
     list($id,$desc,$cant,$clientesillo,$pu) = explode(":",$carrito[$j]);
     if($id!="null")
       echo "<input type=\"checkbox\" name=\"d$id\" value=\"$j\" >$cant | $desc | $pu<br>";
   }
 ?>
 </div>
 <input type="submit" name="acc" value="Eliminar seleccionados">
 <input type="submit" name="acc" value="Facturar todo">
 </form>