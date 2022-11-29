<?php 
function select_dni($tblname,$field_name,$field_dni){
  $sql = "Select * from ".$tblname." where ".$field_name." = "."'".$field_dni."'"."";
  $db=db_query($sql);
  $GLOBALS['row'] = mysqli_fetch_object($db);
  return $sql;

}

function borrar($dni){
  $conexion=conectar_db();
  $sql= "DELETE from clientes where dni='$dni'";
      mysqli_query($conexion,$sql);             //ejecutamos la consulta para eliminar el registro
      echo 'Registro eliminado exitosamente';
      
    }
     function grabarCambios($dni,$nombre,$direccion,$localidad,$provincia,$telefono,$email){
      //escribo en mi base de datos
     $conexion=conectar_db();
     if (isset($dni)){
       $cad="UPDATE clientes set nombre='$nombre',
       direccion='$direccion',
       localidad='$localidad',
       provincia='$provincia',
       telefono='$telefono',
       email='$email' where dni='$dni'";
       mysqli_query($conexion,$cad);
        //echo $cad;
       echo '<p>Registro Actualizado</p>';
       header('Location:pruebacl.php');
     }
   }

if (isset($_POST['submit'])) {
      
    try {
      
  
    $stmt= $con->prepare('UPDATE clientes SET dni = :dni, nombre = :nombre, direccion = :direccion, localidad = :localidad, provincia = :provincia, telefono = :telefono  WHERE email = :email');
    $rows= $stmt->execute(array(':dni' => $dni, ':nombre' => $nombre, ':direccion' => $direccion, ':localidad' => $localidad, ':provincia' => $provincia, ':telefono' => $telefono, ':email' => $email));
    if ($rows > 0) {
      
      header('Location:index.php');

    }
    }  catch (Exception $e) {
        echo "Error" ->getMessage();
    }} 
 ?>

<?php
$con=conectar_dbObjLocal();
 try {
 $stmt=$con->prepare('INSERT INTO pedidos (dni_cliente, id_producto, fechaPedido, direccionEntrega, estado, total, localidadEntrega, provinciaEntrega, telefonoContacto) VALUES (:dni_cliente, :id_producto, :fechaPedido, :direccionEntrega, :estado, :total, :localidadEntrega, :provinciaEntrega, :telefonoContacto)');
 $rows=$stmt->execute(array(':dni_cliente'=>$dni, ':id_producto'=>$id, ':fechaPedido'=>$fecha, ':direccionEntrega'=>$direccion, ':estado'=>1, ':total'=>$total, ':localidadEntrega'=>$localidad, ':provinciaEntrega'=>$provincia, ':telefonoContacto'=>$telefono));   
    
}  catch (Exception $e) {
    echo "Error".$e->getMessage();
}

?>

ErrorSQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`tiendaonline`.`pedidos`, CONSTRAINT `Fk_compra_por` FOREIGN KEY (`dni_cliente`) REFERENCES `clientes` (`dni`) ON DELETE NO ACTION ON UPDATE CASCADE)