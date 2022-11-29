



<html>
<head>
<meta charset="utf-8">
<title>borrar Registros Mysql Mediante Funcion</title>



</head>

<body>
<div >
<h1> Si está seguro elimina el registro en la BD</h1>
<br><br>
<?php 
include("function.php");
$dni = $_GET['dni'];
// $dni = (string) $dni;
select_dni('clientes','dni',$dni);

?>
<form action="" method="post">
	<input type="text" value="<?php echo $row->nombre;?>" name="nombre">
	<input type="text" value="<?php echo $row->direccion;?>" name="direccion">
	<input type="text" value="<?php echo $row->localidad;?>" name="localidad">
	<input type="text" value="<?php echo $row->provincia;?>" name="provincia">
	<input type="text" value="<?php echo $row->telefono;?>" name="telefono">
	<input type="text" value="<?php echo $row->email;?>" name="email">
	<input type="submit" name="submit">
	
</form>
	<?php  
	if(isset($_POST['submit'])){
		$field = array("nombre"=>$_POST['nombre'], "direccion"=>$_POST['direccion'], "localidad"=>$_POST['localidad'], "provincia"=>$_POST['provincia'], "telefono"=>$_POST['telefono'], "email"=>$_POST['email']);
		$tbl = "clientes";
		delete($tbl,$field,'dni',$dni);
		header("location:index.php");
	}
?>
</div>
</body>
</html>