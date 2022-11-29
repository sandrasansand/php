<?php
$conexion=mysql_connect('localhost','root','') or die('no hay conexion a la base de datos');
$db=mysql_select_db('tienda',$conexion) or die ('no existe la base de datos');

define ('BASE_URL','http://localhost/tienda/');  //minuto 16 eb adelante http://db738041399.db.1and1.com/dbo738041399

function base_URL($cad){
return base_URL.$cad;
};
?>



