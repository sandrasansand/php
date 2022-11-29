<!-- //le paso por get dni y nombre. Lo digo al cliente con dni y nombre esta seguro. y dos botones eliminar y cancelar . Los dos me reedirigen a index. -->

<?php 
include 'funciones.php';
$conexion=conectar_db();
echo "<h3>Si está seguro que desea eliminar sus datos introduzca su dni: </h3>";
echo "<br>";
if (isset($_POST['Enviar'])){
	if (empty($_POST['dni'])) {
		echo "El dni no puede estar vacío";
	}else{
		$dni=$_POST['dni'];
		dni_valido($dni);
	//var_dump($dni);
	}
	if (isset($dni)) {
		$sql="DELETE FROM clientes WHERE dni='$dni'";
		$respuesta=mysqli_query($conexion,$sql);
		if ($respuesta) {
			header('Location:index.php');
		}else{
			echo "Error al eliminar";
		}
	}
}


?>
<form name="borrar" method="post" action="">
<strong>Dni:</strong><br/>
<input type="text" name="dni" size="9" maxlength="9"><br>
<input type="submit" value="Enviar" name="Enviar" title="Enviar" />
</form>