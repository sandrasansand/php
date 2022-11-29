<?php

function cargar_usuarios() {
    

$conexion = mysqli_connect('localhost','root','','tienda');
if($conexion == FALSE){
    echo ('error de conexion');
    exit();
}

$conexion ->set_charset('utf-8');

$res = mysqli_query($conexion, 'SELECT * FROM usuarios WHERE permisos=9');
if ($res == FALSE){
    echo ('error en la consulta');
    mysqli_close($conexion);
    exit();
}

$usuarios = '';
while ($fila = mysqli_fetch_row($res)){
    $usuarios .='<tr>';
    $usuarios .=sprintf("<td>%u</td><td>%s</td><td>%s</td>",
    $fila [0],  $fila [1],  $fila [2]);
    $usuarios .= sprintf('</tr>');
    
}
mysqli_free_result($res);
mysqli_close($conexion);

return $usuarios;

}


?>

<table border ='1'>
  <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Usuario</th>
  </tr>
  
  
  <?php 
  print (cargar_usuarios());
  ?>
  
  
</table>





