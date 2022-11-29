<?php 
/*
print_r($_FILES);
echo("<br>");
echo("nombre de la imagen: ");
print_r($_FILES['imagen']['name']);
echo("<br>");
echo("tipo de la imagen: ");
print_r($_FILES['imagen']['type']);
echo("<br>");
echo("ruta temporal  de la imagen: ");
print_r($_FILES['imagen']['tmp_name']);
echo("<br>");
*/

/*
$servidor = "localhost";
$usuario = "root";
$password ="alumno";
$basededatos="datos"; 
*/

/**
$conexion= mysqli_connect('localhost','root','alumno')or die("conexion fallida");

//$conexion = new mysqli("localhost", "root", "alumno", "datos");
$db= mysqli_select_db($basededatos,$conexion) or die ("base de datos no existe");


*/

$servername = "localhost";
$username = "root";
$password = "alumno";
$dbname = "datos";

$conexion= mysqli_connect($servername, $username, $password, $dbname);
if (!$conexion) {
    die('No se pudo conectar : ' . mysqli_error());
}
/*
// Hacer que datos sea la base de datos actual
$bd_seleccionada = mysqli_select_db('datos', $conexion);
if (!$bd_seleccionada) {
    die ('No se puede usar base de datos : ' . mysqli_error());
}
*/

$rutaEnServidor= 'imagenes';
$rutaTemporal= $_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino= $rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);

$desc=$_POST['descripcion'];


/*
$sql = "INSERT INTO products (ruta, descripcion)
VALUES ($rutaDestino, $desc);";
if ($conexion->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

*/

$sql="INSERT INTO products (ruta,descripcion) Values('".$rutaDestino."','".$desc."')";
$respuesta=mysqli_query($conexion,$sql);

if($respuesta){
	echo("insercción con exito");
}
		else{
			echo("insercción fallida");
		}

?>