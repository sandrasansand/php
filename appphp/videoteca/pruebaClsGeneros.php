<?php
require ('claseGeneros.php');

$oGeneros = new claseGeneros;
$oGeneros ->Ordenada = TRUE;
$sGeneros = $oGeneros ->Cargar();

?>
<table><tr><td>

<table border="1">
<tr>
<th>Id</th>
<th>Nombre</th>
<th>Descripción</th>
</tr>

<?php
print ($sGeneros);

?>
</table>

</td><td>


<?php 
$oGeneros1 = new claseGeneros;
$oGeneros1 ->Ordenada = TRUE;
$sGeneros1 = $oGeneros1 ->Cargar();
?>

<table border="1">
<tr>
<th>Id</th>
<th>Nombre</th>
<th>Descripción</th>
</tr>



<?php
print ($sGeneros1);
?>
</table>

</td></tr></table>
