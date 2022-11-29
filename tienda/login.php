<?php
 include("conecta.php");
 $con=conectar_db();
 ?>	 

<?php
$usuarioIng=$_POST['user'];
$passIng=$_POST['pass'];

session_start();

$consulta=("select * from usuarios");
$puerta='continuar';
$resultado="";
$res=mysqli_query($con,$consulta);
// while ($filas=mysqli_fetch_array($res)){


while($filas=mysqli_fetch_array($res) and $puerta='continuar'){

      $id =$filas ['id'];
	    $nombre =$filas['nombre'];
      $usuario =$filas['usuario'];
      $pass =$filas['pass'];
      $permiso =$filas['permisos'];
      $fecha=$filas['fecha'];
      
      if (isset($usuarioIng) and isset($passIng)){
        if ($usuario==$usuarioIng and $pass==$passIng){
            echo 'bienvenido '. $nombre;
            $miSession=array('id'=>$id,'nombre'=>$nombre,'usuario'=>$usuario,'pass'=>$pass,'permisos'=>$permiso,
                             'fecha'=>$fecha);  //EN UN ARRAY ASOCIATIVO ALMACENAMOS TODO LO REFRENTE AL USUARIO
            $_SESSION['miSession']=$miSession; // ALMACENAMOS en  $miSession todos lo datos del usuario en sesion ir ala página restringida.
            ?>
            <html>
               <head>
                <meta http-equiv="refresh" content="3; url= buscar.php">
                
               </head>
                <html>
            <?php
            $puerta='salir'; //salimos del bucle ya se encontró al usuario
            exit;
        }
        else{
         $resultado='no';  //si los usuaios no coiciden el del campo de texto y el de la base de datos
        }
      }
    
}
      if ($resultado=='no'){
      echo 'su ususario o contraseña no se encontraron.';  //FALTA DESARROLLAR PÁGINA DE REGISTRO
        ?>
         <html>
               <head>
                <meta http-equiv="refresh" content="3; url= formRegistro.php">
                
               </head>
                <html>     
    <?php
  
 }
?>
<?php include ('plantilla/footer.php');?>