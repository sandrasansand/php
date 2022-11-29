<?php
 include("conecta.php");
 $con=conectar_db();
 ?>
<?php
$id=$_POST['id']; //declaro una variable $id y capturo por Post lo que me viene del form
$a=borrar($id);  //declaro una variable para ejecutar la función borrar a la que le paso el id capturado.

?>

<html>                   <!--codigo html de reedireccionamiento a otra pagina -->
    <head>
        <meta http-equiv="refresh" content="3; url= buscar.php">
    </head>
<html>