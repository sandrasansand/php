<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<body>
<?php
session_start();

if ($_SESSION['miSession']['permisos']==1){         //permiso a 1 condición todos los permisos usuario administrador base de datos
                       //tendrá permisos para cargar productos en el Stock cargarProductos.php
    echo $_SESSION ['miSession']['nombre'].'<br>';
    echo $_SESSION ['miSession']['usuario'].'<br>';
   // echo $_SESSION ['miSession']['permisos'].'<br>';
    echo 'tiene permisos para editar productos.';     
    
    ?>
    
 <html>
  <head>
                <meta http-equiv="refresh" content="3; url= cargarProductos.php"> 
                
               </head>
<?php 
    
}
else{
    echo 'no tiene permisos de edición';
    ?>
 <html>
  <head>
                <meta http-equiv="refresh" content="3; url= principal.php"> 
                
               </head>
<?php
   	  
}


 

            
   ?>
</body>
</html>