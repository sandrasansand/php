<? include_once("verificarSesion.php"); ?>

 <h3> Catalogo de productos </h3>
 <p>Seleccione la casilla del producto que desee agregar al carrito<p>
 <form method="post" action="">
 Producto ---------- Cantidad
 <div id="catalogo">
 <table>
 <?
   for($j=0;$j<sizeof($catalogo);$j++){
     list($id,$name,$existencias) = explode(":",$catalogo[$j]);
     if($existencias>0){
       echo "<tr><td><input type=\"checkbox\" name=\"p$id\" value=\"$name\" >$name</td>";
       echo "<td><select name=\"c$id\">";
       for($k=1;$k<=$existencias;$k++) echo "<option>$k</option>";
       echo "</select></td></tr>\n";
     }  
   }
 ?>
 </table>
 </div>
 <input type="submit" name="acc" value="Agregar al carrito">
 </form>