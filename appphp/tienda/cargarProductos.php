<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<form action="recibirProductos.php" name="form3" method="post" enctype="multipart/form-data">
<table width="250" border="0">
 <tr>
        <td colspan="2 "width="200">Ingreso de productos en el Stock</td>
      
    <tr>
        <td width="200">&nbsp;</td>
        <td width="120">&nbsp;</td>
    </tr>
        <tr>
        <td>Imagen:</td>
        <td><input type="file" name="imagen" id="imagen" /> </td>
    </tr>
        <tr>
        <td>Nombre:</td>
        <td><input type="text" name="nombre" id="nombre"/> </td>
    </tr>
        <tr>
        <td>Descripción:</td>
        <td><input type="text" name="descripcion" id="descripcion" /> </td>
    </tr>
        <tr>
        <td>Precio:</td>
        <td><input type= "text" name="precio" id="precio" /> </td>
    </tr>
       
        <tr>
        <td>Stock</td>
        <td><input type="text" name="stock" id="stock" /> </td>
    </tr>
        <tr>
        <td>Fecha:</td>
        <input type="text" name="fecha" id="fecha" value="<?php echo date("Y-n-d"); ?>" /> 
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



</html>