<!DOCTYPE html>
    <?php
 include("conecta.php"); ?>
 

 <?php include ('plantilla/head.php');?>
    
 
   
    
    <?php
  $con=conectar_db();
    if (isset($_POST['id_txt'])){
     $id= $_POST['id_txt'];
     $nombre= $_POST['nombre'];
     $precio= $_POST['precio'];
     $cantidad= $_POST['cantidad'];
    
     $mi_carrito[]= array('id' =>$id,'nombre' =>$nombre,'precio' =>$precio, 'cantidad' =>$cantidad);
     
    }
    
    session_start();
  if (isset($_SESSION['carrito'])){  //le preguntamos si la variable de sesion carrito existe
   $mi_carrito= $_SESSION['carrito']; //guardamos en la variable mi_carrito con los datos de Sesion que es un array de los datos del carrito
    if(isset( $_POST['id_txt'])){
      $id= $_POST['id_txt'];
      $nombre= $_POST['nombre'];
      $precio= $_POST['precio'];
      $cantidad= $_POST['cantidad'];
      $pos=-1; //si tengo -1 el producto no existe
      for($i=0;$i<count($mi_carrito);$i++){
       if($id==$mi_carrito[$i]['id']){
         $pos=$i;
       }
      }
      if($pos<>-1){   //si posición es distinto a -1 es porque el producto existe. Si existe sigfca que recorrimos el bucle anterior
          $cuanto= $mi_carrito[$pos]['cantidad']+$cantidad;  //nos guardamos la cantidad a comprar pulsada hasta el momento (que será +1) en la variable cuanto
          $mi_carrito[$pos]= array('id' =>$id,'nombre' =>$nombre,'precio' =>$precio,'cantidad' =>$cuanto);
        } else{   //si es igual a -1 agrego la cantidad al final. 1
          $mi_carrito[]= array('id' =>$id,'nombre' =>$nombre,'precio' =>$precio,'cantidad' =>$cantidad);
         }
       }
     }
     //ACTUALIZACIÓN DE REGISTRO
 if (isset($_POST['id2'])){
  $indice=$_POST['id2'];  //nos llega el numero del producto que está en el array.eN LA POSICIÓN O O 7 PUEDE ESTAR CUALQUIER PRODUCTO
  $cuanto=$_POST['cantidad2'];
  $mi_carrito[$indice]['cantidad']=$cuanto; 
  
 }
 
 //Eliminación de registro. 
 if (isset($_POST['id3'])){  //si le llegan datos por Post , del campo id3. Será que le llegan datos de eliminación
  $indice=$_POST['id3'];  //el numero de la posición dentro del array de micarrito.
  $mi_carrito[$indice]=NULL;
  
 }
 
 if(isset($mi_carrito)){
  $_SESSION['carrito']= $mi_carrito;
    }   
?>
<div class="carritoVista">
<br></br>
<table width="480" id="table">
 <tr>
  <td colspan="4" algin="center">LISTADO DE COMPRAS </td>
 </tr>
 <tr>
     <td colspan="3" bgcolor="">&nbsp</td>
</tr>
  <tr>
  <td width="100" bgcolor="">PRODUCTO </td>
  <td width="100" bgcolor="">PRECIO</td>
  <td width="100" bgcolor="">CANTIDAD </td>
  <td width="93" bgcolor="">SUBTOTAL </td>
 </tr>
  
  <?php
     if (isset($mi_carrito)){
      $total=0;
      for ($i=0;$i<count($mi_carrito);$i++){
       if($mi_carrito[$i]<> NULL) {  //si es null no recorre el bucle y la eliminación es completa
        

       
  
  ?>
  
   <tr>
  <td bgcolor=""> <?php echo  $mi_carrito[$i]['nombre'] ?> </td>
  <td bgcolor=""> <?php echo  $mi_carrito[$i]['precio'];?></td>
  <td bgcolor="" width="250">
  <form action="" name="actualizo" method="post">
        <input type="hidden" name="id2" value="<?php echo $i ?>" />
        <input type="text" name="cantidad2" value="<?php echo  $mi_carrito[$i]['cantidad'] ?>" size="2" maxlength="2"/>
        <input type="image" name="" src="<?php echo base_url('iconos/actualizar.png')?>"  />
  </form></td>
  
  <?php
    $subtotal = $mi_carrito[$i]['precio']*$mi_carrito[$i]['cantidad'];
    $total=$total+$subtotal;
  ?>
  <td bgcolor=""> <?php echo  $subtotal ?>
 </td>
   <td bgcolor="" >
    <form action="" method="post" name="eliminar">
  <input type="hidden" name="id3" value="<?php echo $i ?>" /> 
  <input type="image" name="" src="<?php echo base_url('iconos/basura.png')?>"  />
   
  </form></td>
<?php
       }
     }
   }
?>
  
 </tr >
   <tr>
	<td colspan="4">&nbsp</td>
	</tr>
    <tr>
  <td bgcolor=""></td>
  <td bgcolor=""></td>
  <td bgcolor=""> Total</td>
  <td bgcolor=""><?php  if (isset($total))echo  $total  ?></td>
 </tr>
    <tr>
	<td colspan="4">&nbsp</td>
	</tr>
    <tr>
  <td bgcolor=""></td>
  <td bgcolor=""></td>
  <td bgcolor=""><form action="confirmarPedido.php" method="post" name="form2">
   <input  type="submit" value="confirmar pedido" id="confirmarPedido" class="btn"/>
   </form></td>
  <td colspan="2" bgcolor=""></td>
 </tr>
    
</table>
</div>
<p><a href="galeria.php"> Volver</a></p>
 <?php include ('plantilla/footer.php');?>