<?php 
$servername = "localhost";
$username = "root";
$password = "alumno";
$dbname = "datos";

$conexion= mysqli_connect($servername, $username, $password, $dbname);
if (!$conexion) {
    die('No se pudo conectar : ' . mysqli_error());
}

$consulta= "select * from products";
$resultado= mysqli_query($conexion,$consulta);
while ($filas= mysqli_fetch_array($resultado)){
	$ruta= $filas['ruta'];
	$desc=$filas['descripcion'];
	
?>
<?php echo $desc; ?> <br>
<img src="<?php  echo $ruta;?>" width="180" height="214">

<?php } ?>

