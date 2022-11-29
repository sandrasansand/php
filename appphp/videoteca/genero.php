<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nuevo género</title>
</head>
<body>
<form name="frm_genero" method="post" action="formulario.php">

      <strong>Nombre:</strong><br/>
      <input type="text" name="nombre"><br/>

      <strong>Descripción:</strong><br/>
      <input type="text" name="descripcion"><br/>

      <input type="submit" value="Guardar">
    </form>
<?php
echo ('<pre>');
print_r($_GET);
echo ('</pre>');

?>
 
</body>
</html>