<?php
include ('funcionGeneros.php');

?>

<table border="1">
<tr>
<th>Id</th>
<th>Nombre</th>
<th>Descripción</th>
</tr>

<?php 
print (cargar_generos());
?>
</table>