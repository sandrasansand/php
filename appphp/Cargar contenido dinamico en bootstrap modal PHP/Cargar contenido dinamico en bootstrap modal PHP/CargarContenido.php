<?php
if(!empty($_GET['id'])){
    //DB detalles de conexion
    $Host = 'localhost';
    $Username = 'root';
    $Password = '';
    $bdName = 'php_modal';
    
    //Crear conexion y seleccioanr la base de datos
    $conexion = new mysqli($Host, $Username, $Password, $bdName);
    
    if ($conexion->connect_error) {
        die("No hay conexion con la database: " . $db->connect_error);
    }
    
    //Traer contenido de la base de datos
	$conexion->set_charset("utf8");
    $query = $conexion->query("SELECT * FROM content_modal WHERE id_modal = {$_GET['id']}");
    
    if($query->num_rows > 0){
        $contenido = $query->fetch_assoc();
        echo '<h4>'.$contenido['titulo'].'</h4>';
        echo '<p>'.$contenido['contenido'].'</p>';
    }else{
        echo 'No hay contenido...';
    }
}else{
    echo 'No hay contenido...';
}
?>