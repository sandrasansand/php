<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
$id= $_POST['id2'];  //lo primero capturamos todas las variables que nos vienen por Post desde conecta.php ,cuando entra en editar 
$imagen= $_POST['imagen2']; 
$nombre= $_POST['nombre2']; 	 //me llegan del form id=compra action=editar.php  	//entrando como administrador 
$desc= $_POST['desc2'];
$precio= $_POST['precio2'];
$cantidad= $_POST['cantidad2'];  //aqui quito stock por cantidad para el MODO EdITAR es asi__DESARROLLADO EN conecta.php
$fecha= $_POST['fecha2'];
?>
<body>
	<form id="form1" name="form1" method="post" action="recibirEditar.php" enctype="multipart/form-data" >

	<table width="200" border="0" algin="left" >

	    <tr>
	      <td>Imagen a Insertar</td>
	      <td><label for="imagen2"><input type="file" name="imagen2" id="imagen2"/> </label> </td>
        </tr>
               <tr>
	      <td>Imagen:</td>
	      <td><label for="imagen"><img src="<?php echo $imagen?>" width="120" height="154"/></label></td>
        </tr>
               
          <tr>
	      <td>Nombre:</td>
		  <input type="hidden" name="id" id="id" value="<?php echo $id ?>"/> 
	      <td><label for="nombre"><input type="text" name="nombre" id="nombre" value="<?php echo $nombre ?>"></label></td>
        </tr>
        
            <tr>
	      <td>Descripción:</td>
	      <td><label for="descripcion"><input type="text" name="descripcion" id="descripcion" value="<?php echo $desc?>"></label></td>
        </tr>
            
             <tr>
	      <td>En Stock:</td>
	      <td><label for="Stock"><input type="text" name="stock" id="stock" value="<?php echo $cantidad ?>"></label></td>
        </tr>
             
              <tr>
	      <td>Precio:</td>
	      <td><label for="precio"><input type="text" name="precio" id="precio" value="<?php echo $precio ?>"></label></td>
        </tr>
              
               <tr>
	      <td>fecha:</td>
	      <td><label for="fecha"><input type="text" name="fecha" id="fecha" value="<?php echo $fecha ?>"></label></td>
        </tr>
               
                
                
            </tr>
        <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
        <tr>
        <td></td>
        <td><input type="submit" name="enviar" value="Modificar"/> </td>
    </tr>
        
    </table>
    </form>
 
 
    
</body>

</html>

