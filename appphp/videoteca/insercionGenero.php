<?php
include 'conexionObjeto.php';

$parametros = FALSE;
if (count($_GET) != 0) { // compruebo si me llegan valores por post o get
    $parametros = $_GET; // guardo lo que llega por get
} elseif (count($_POST) != 0) {
    $parametros = $_POST;
}
if ($parametros != FALSE) {
    $nombre = $parametros['nombre']; // guardo el nombre en una variable
    $descripcion = $parametros['descripcion']; // guardo la descripción del form en otra variable

    if (($nombre == '') or ($descripcion == '')) { // hago comprobación de que no estén vacíos empty
        $mensaje = 'El nombre y la descripción del nuevo genero ' . 'no pueden ser cadenas vacías';
        echo ($mensaje);
    } else { // hago la insercion y me la guardo en consulta
        $consulta = <<<CONSULTA
        INSERT INTO genero(nombre,descripcion) VALUES ('$nombre','$descripcion');
        CONSULTA;

        // $videoteca = new mysqli('localhost', 'root','','videoteca'); //conexión con la bd
        // if ($videoteca == FALSE) {
        // echo ('error en la conexion');
        // exit();
        // }

        $resultado = $videoteca->query($consulta); // le paso la consulta hecha a la bd mediante metodo query()y me la guardo en la viable resultado
        if ($resultado == FALSE) {
            echo ('error en la consulta');
            echo ($videoteca->error);
            exit();
        }
        echo ('nuevo genero añadido');
        $videoteca->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo género</title>
    <script type="text/javascript" src="genero.js"></script>
</head>
<body>
	<form name="frm_genero" method="get" action="">

		<strong>Nombre:</strong><br /> <input type="text" name="nombre"><br />

		<strong>Descripción:</strong><br /> <input type="text"
     name="descripcion"><br /> <input type="submit" value="Guardar"
     onClick="return comprobar_valores()">
 </form>


</body>
</html>
