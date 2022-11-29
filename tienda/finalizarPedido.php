<?php
session_start();
//DESTRUIR SESION AL FINALIZAR COMPRA
$nombre= $_POST['nombre'];   //capturamos por post todas las variables que nos vienen del form confirmarPedido.php
$direccion=$_POST['direccion'];
$tel=$_POST['tel'];
$correo=$_POST['correo'];
$mi_carrito=$_SESSION['carrito'];  //utilizamos la variable sesion para traer lo que contenga el carrito, nos llega por session
$pedido='
<h3> Gracias por su compra </h4><br><h4>'.$nombre. '</h4>
Su transacci&oacute;n finaliz&oacute; con &eacute;xito.<br> En breve recibir&aacute; en su
email un mensaje de confirmaci&oacute;n de pedido.<br> Saludos cordiales.
<br><br>';


if (isset($mi_carrito)){
      $total=0;
      $pedido.='                  
            <table width="300" border="0">
         <tr>
        <td colspan="4" algin="center">LISTADO DE COMPRAS </td>
        </tr>
        <tr>
            <td width="100" bgcolor="#FF9900">PRODUCTO </td>
            <td width="100" bgcolor="#FF9900">PRECIO</td>
            <td width="100" bgcolor="#FF9900">CANTIDAD </td>
            <td width="93" bgcolor="#FF9900">SUBTOTAL </td>
        </tr> ';
      
      
      for ($i=0;$i<count($mi_carrito);$i++){
       if($mi_carrito[$i]<> NULL) {  //si es null no recorre el bucle y la eliminación es completa
        $subtotal = $mi_carrito[$i]['precio']*$mi_carrito[$i]['cantidad'];
        $total=$total+$subtotal;
        $pedido.='
        <tr>
            <td bgcolor="#FFFADD"> ' .$mi_carrito[$i]['nombre'].'  </td>
            <td bgcolor="#FFFADD"> '.$mi_carrito[$i]['precio'].' </td>
            <td bgcolor="#FFFADD"> '. $mi_carrito[$i]['cantidad'].' </td>
            <td bgcolor="#FFFADD"> '.$subtotal.'</td>
        </tr> ';
      
        
        }
    }
    
$pedido.='<tr><td> Total: '.$total;
$pedido.='</td><tr>';
echo $pedido;  //ejecuto el codigo html que he guardado para darle presencia-la tabla
}
//***********envio por correo ejemplo mail php()
// Varios destinatarios
$para  = $correo . ', '; // atención a la coma  copia cliente
$para .= 'sannnd.sa@gmail.com';   //copia para la empresa

// título
$título = 'Su compra fue finalizada con éxito.';

// mensaje
$mensaje = $pedido;

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
//$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: Empresa S.l. <sannnd.sa@gmail.com>' . "\r\n";
//$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Enviarlo
mail($para, $título, $mensaje, $cabeceras);
?>
     <html>
  <head>
                <meta http-equiv="refresh" content="6; url= galeria.php"> 
                
               </head>