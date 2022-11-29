<?php
include ('conexion.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="<?php echo base_url('css/estilo.css')?>" rel="stylesheet">
</head>

<body>
 
<form action="finalizarPedido.php" method="post" name="form">

<h1>Confirmar pedido</h1>

 <table width="300" border="0" id="table">
  <tr>
  <td colspan="4" algin="center">LISTADO DE COMPRAS </td>
   
  </tr>
  <tr>
      <td colspan="4" bgcolor="">&nbsp</td></tr>
  <tr>
   <td width="100" bgcolor="#FAAA4A">PRODUCTO </td>
   <td width="100" bgcolor="FAAA4A">PRECIO</td>
   <td width="100" bgcolor="FAAA4A">CANTIDAD </td>
   <td width="93" bgcolor="FAAA4A">SUBTOTAL </td>
 </tr>
  
  <?php
 session_start();
 $mi_carrito= $_SESSION['carrito'];  // mi carrito es igual a lo que traiga la sesion
     if (isset($mi_carrito)){
      $total=0;
      for ($i=0;$i<count($mi_carrito);$i++){
       if($mi_carrito[$i]<> NULL) {  //si es null no recorre el bucle y la eliminación es completa
        

       
  
  ?>
  
  <tr>
   <td bgcolor=""> <?php echo  $mi_carrito[$i]['nombre'] ?> </td>
   <td bgcolor=""> <?php echo  $mi_carrito[$i]['precio'] ?></td>
   <td bgcolor="" width="250"><?php echo $mi_carrito[$i]['cantidad'] ?> </td>
  
  
  
  <?php
    $subtotal = $mi_carrito[$i]['precio']*$mi_carrito[$i]['cantidad'];
    $total=$total+$subtotal;
  ?>
   <td bgcolor=""> <?php echo  $subtotal ?>
 
<?php
       }
     }
   }
?>
  
 </tr >
 <tr>
  <td bgcolor=""></td>
  <td bgcolor=""></td>
  <td bgcolor=""> Total</td>
  <td bgcolor=""><?php  if (isset($total))echo  $total  ?></td>
 </tr>
    
 <tr>
  <td bgcolor=""></td>
  <td bgcolor=""></td>
  <td bgcolor="">
  </td>
  <td colspan="2" bgcolor=""></td>
 </tr>
    
 
 <tr>
  <td width="100" bgcolor=""> </td>
  <td width="100" bgcolor=""></td>
  <td width="100" bgcolor=""> </td>
  <td width="93" bgcolor=""> </td>
 </tr>
  
  <tr> 
   <td colspan="5" algin="center" bgcolor="">DATOS DEL COMPRADOR </td>
  </tr>
    <tr>
      <td colspan="4" bgcolor="">&nbsp</td>
	 </tr>

  <tr>
   <td colspan="4" bgcolor=""> </td>
  </tr>


 <tr>
  <td width="100" bgcolor="">Nombre:</td>
  <td colspan="4" bgcolor=""> <input type="text" id="nombre" name="nombre" /></td>
 </tr>
   
 <tr>
  <td width="100" bgcolor="">Direccion: </td>
  <td colspan="4" bgcolor=""> <input type="text" id="direccion" name="direccion" /></td>
 </tr>
    
 <tr>
  <td width="100" bgcolor="">Teléfono:</td>
  <td colspan="4" bgcolor=""> <input type="text" id="tel" name="tel" /></td>
 </tr>
   
 <tr>
  <td bgcolor="">E-mail: </td>
  <td colspan="4" bgcolor=""> <input type="text" id="correo" name="correo" /> <br></br></td>
 </tr>

  <tr>
    <td bgcolor="">&nbsp</td>
    <td bgcolor=""> <input  type="submit" value="Comprar" name="confirmarPedido" id="confirmarPedido" class="btn"/> </td>
    <td colspan="3" bgcolor="">&nbsp</td>
  </tr>    
 </table>
</form>
    
</body>
</html>