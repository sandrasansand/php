<?php
include ('conecta.php'); ?>
<!-- <!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<!-- <link href="<?php //echo base_url('estilo.css')?>" rel="stylesheet"> -->
<!-- <link rel="stylesheet" type="text/css" href="css/estilo.css"> -->
<!-- </head>
<body> --> 

<!-- Aplicar sistema autentificacion usuarios -->

<?php include 'plantilla/head.php' ?>

<form action="registro.php" name="form3" method="post" enctype="multipart/form-data">
<table width="250" border="0" id="table">
 <tr>
        <td colspan="2 "width="200">Ingreso de usuarios nuevos</td>
      
    <tr>
        <td width="200">&nbsp;</td>
        <td width="120">&nbsp;</td>
		       <tr>
        <td>Nombre:</td>
        <td><input type="text" name="nombre" id="nombre"/> </td>
    </tr>
    </tr>
     
 
        <tr>
        <td>usuario:</td>
        <td><input type="text" name="usuario" id="usuario" /> </td>
    </tr>
        <tr>
        <td>Password:</td>
        <td><input type= "text" name="pass" id="pass" /> </td>
    </tr>
       
        <tr>
        <td>permisos</td>
        <td><input type="hidden" name="permisos" id="permisos" value="9"/> </td>
    </tr>
	   <tr>
        <td>Imagen:</td>
        <td><input type="file" name="imagen" id="imagen" /> </td>
    </tr>
	
        <tr>
        <td>Fecha:</td>
        <td><input type="text" name="fecha" id="fecha" value="<?php echo date("Y-n-d"); ?>" /> </td>
    </tr>
        <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
        <tr>
        <td><input type="submit" name="enviar" value="enviar"/> </td>
        <td>&nbsp;</td>
    </tr>
    
    
    
</table>
</form>  
 

    
</body>

<?php include ('plantilla/footer.php');?>

</html>

