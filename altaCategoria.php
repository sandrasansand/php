<?php 
session_start();
include 'funciones.php';
if (!isset($_SESSION['miSession']['permisos'])) {
	header('Location:index.php');
}else {
	if ($_SESSION['miSession']['permisos'] !='1' && $_SESSION['miSession']['permisos'] !='3'){
		header('Location:index.php');
	}
}
$con=conectar_dbObjLocal();
$estatus=1;
$id=isset($_GET['id']) ? $_GET['id']:null;
$categoria=isset($_GET['nombreCategoria']) ? $_GET['nombreCategoria']:null;
try {
	$stmt=$con->prepare("UPDATE categorias SET estatus = :estatus WHERE id_categoria = :id_categoria AND nombreCategoria = :nombreCategoria");
	$rows=$stmt->execute(array(':id_categoria'=> $id, ':nombreCategoria'=> $categoria, ':estatus' => $estatus));
	if ($rows > 0) {?>
		<html>
		<head>
			<meta http-equiv="refresh" content="0; url= categorias.php"> 

		</head>
	 <?php  // header('Location:categorias.php');
	}else{
		echo "Error en el borrado";
	}
	
}
catch (ExceptionPDO $e) {
	echo "Error en el borrado". $e->getMessage(); ;
}

?>

