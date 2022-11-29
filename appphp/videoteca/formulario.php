<?php 
$parametros = FALSE;

if (count($_GET) !=0) {
    $parametros =$_GET;
} elseif (count($_POST) !=0) {
    $parametros =$_POST;
}
if ($parametros == FALSE) {
   echo("No se ha pasado ningún valor");
   exit();
   
}
echo('<table border="1">');
echo('<tr>');
echo('<th>Nombre</th><th>Valor</th>');
echo('</tr>');

foreach ($parametros as $nombre => $valor) {
    echo ('<tr>');
    printf(
        "<td>%s</td><td>%s</td>",
        $nombre,$valor);
    echo('</tr>');
    
}
echo ('</table');
?>