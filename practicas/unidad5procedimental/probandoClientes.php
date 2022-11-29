<?php
include 'funciones.php';

function cargar_clientes() {
    

// $conexion = mysqli_connect('localhost','root','','clientes_db');
// if($conexion == FALSE){
//     echo ('error de conexion');
//     exit();
// }
$conexion= conectar_db();
$conexion ->set_charset('utf-8');


$res = mysqli_query($conexion, 'SELECT * FROM clientes');
if ($res == FALSE){
    echo ('error en la consulta');
    mysqli_close($conexion);
    exit();
}

$clientes = '';
while ($fila = mysqli_fetch_row($res)){
    $clientes .='<tr>';
    $clientes .=sprintf("<td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td><a href='editarCliente.php'><img src='iconos/editar2.png'></a></td><td><a href='borrarCliente.php'><img src='iconos/eliminar.png'></a></td>",
    $fila [0],  $fila [1],  $fila [2], $fila[3],$fila[4],$fila[5],$fila[6]);
    $clientes .= sprintf('</tr>');
    
}
mysqli_free_result($res);
mysqli_close($conexion);

return $clientes;

}


?>

<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <title>Mostrar Clientes</title>
</head>
<body>


<table border="0" cellpadding="2" cellspacing="1" class="tabla">
  <tr>
    <th>DNI</th>
    <th>Nombre</th>
    <th>Dirección</th>
    <th>Localidad</th>
    <th>Provincia</th>
    <th>Teléfono</th>
    <th>Email</th>
    <th>Editar</th>
    <th>Borrar</th>
  </tr>

<?php 
  print(cargar_clientes());
  ?>
  
  
</table>

<button onclick="location.href='insertarClientes.php'">Nuevo Cliente</button>


</body>
</html>