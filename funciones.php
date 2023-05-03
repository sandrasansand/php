<?php 
function parametrizar_plantilla($variable){
	if (isset($GLOBALS[$variable])) {
		echo $GLOBALS[$variable];
	}else{
		echo 'sin dato';
	}
}

function conectar_dblocal()
{
	$server = "db5002318158.hosting-data.io";
	$user = "";
	$pass = "";
	$bd = "";

		$conexion = mysqli_connect($server, $user, $pass, $bd) or die("Ha sucedido un error inexperado en la conexion de la base de datos" . mysqli_connect_error());

		return $conexion;
	}

	
	function conectar_dbObjLocal(){
		try {
			$con=new PDO('mysql:host=db5002318158.hosting-data.io;dbname=dbs1864811','dbu1341243','KokoroWeb741@.');
			$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (Exception $e) {
			echo "Error concectando con la base de datos" . $e->getMessage();
		}
		return $con;
	}


	function conectar_db(){
		$host_name = 'db5002318158.hosting-data.io';
		$database = '';
		$password = '';
		$user_name = '';

		$dbh = null;

		try {
			$dbh = new PDO("mysql:host=$host_name; dbname=$database;", $password, $user_name);
		} catch (PDOException $e) {
			echo "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
	}

	function conectar_db2()
	{
		$server ='db5002318158.hosting-data.io';
		$user_name ='';
		$password ='';
		$database ='';

		$link = new mysqli($server, $user_name, $password, $database);

		if ($link->connect_error) {
			die('<p>Error al conectar con servidor MySQL: '. $link->connect_error .'</p>');
		} else {
			echo '<p>Se ha establecido la conexión al servidor MySQL con éxito.</p>';
		}
	}


function base_URL($cad)
{
	return BASE_URL . $cad; 
}
function dni_valido($dni){
	$letra = substr($dni, -1);
	$numeros = substr($dni, 0, -1);
	$valido;
	if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
		$valido=true;
	}else{
		echo "dni incorrecto";;
	}
	return $dni;
}
function dni($dni){
  $letra = substr($dni, -1);
  $numeros = substr($dni, 0, -1);
  $valido;
  if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
    $valido=true;
  }else{
    $valido=false;
  }
}
function validaRequerido($valor){
	if(trim($valor) == ''){
		return false;
	}else{
		return true;
	}
}


function validaPassword($valor){
	if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/', $_POST['pass'])) {
		echo "Password_no_valido";

	}
}

function validarEntero($valor, $opciones=null){
	if(filter_var($valor, FILTER_VALIDATE_INT, $opciones) === FALSE){
		return false;
	}else{
		return true;
	}
}

//     }
function validaEmail($valor){
	if(filter_var($valor, FILTER_VALIDATE_EMAIL) === FALSE){
		return false;
	}else{
		return true;
	}
}

function comprobarEmail($email){
	$posicion_arroba = strpos($email, "@");
// Busca la aparición de un punto (.) partir de la arroba
	$posicion_punto = strpos($email, ".", $posicion_arroba);

	if ($email == trim($email)) {
//  echo "El email es correcto pues no tiene espacios en blanco";
	} else{
		echo "Debe escribir su email sin espacios en blanco";
	}
	echo "<br>";
	if ($posicion_arroba && $posicion_punto) {
//echo "Es una dirección de email válida<br>";
		$usuario = substr($email, 0, $posicion_arroba);
		$dominio = substr($email, $posicion_arroba + 1);

	} else {
		echo "No es una dirección de email válida<br>";
		if (!$posicion_arroba) {
			echo "Le falta el caracter arroba<br>";
		}
		if (!$posicion_punto) {
			echo "El dominio no es válido<br>";

		} 

	}
	return $email;
}

function esDisponible($id,$can){
		$con=conectar_dblocal();
	$disponible=false;
	$sql = "select * from productos where id=$id";
	$resultado = mysqli_query($con, $sql);
	$fila = mysqli_fetch_array($resultado);
		$enStock = $fila['stock']; 
		if (isset($id) && ($enStock>=$can)) {
			$can = $enStock - $can;
			$disponible=true;

		}else{
			echo "No disponible en stock," . $enStock. "Uds disponible" ;
		}
		return $disponible;
	}
function ActualizarStock($id, $can)
{
	$con=conectar_dblocal();
	$sql = "select * from productos where id=$id";
	$resultado = mysqli_query($con, $sql);
	$fila = mysqli_fetch_array($resultado);
		$enStock = $fila['stock']; 

		if (isset($id)) {
			$can = $enStock - $can;
			$sql2 = "UPDATE productos set stock='$can' where id=$id";
			mysqli_query($con, $sql2);
				
		}
	}

	function borrar($id){
		$con = conectar_dblocal();
		$sql = "DELETE from productos where id=$id";
		mysqli_query($con, $sql); // ejecutamos la consulta para eliminar el registro
		echo 'Registro eliminado exitosamente';
	}
	function bajasLogicas($id){
		$con = conectar_dblocal();
		$sql = "UPDATE  productos SET estatus=0 where id=$id";
		$result=mysqli_query($con, $sql); // ejecutamos la consulta para eliminar el registro
		if(isset($result))
			return $result;
	}
function altasLogicas($id){
$con = conectar_dblocal();
		$sql = "UPDATE  productos SET estatus=1 where id=$id";
		$result=mysqli_query($con, $sql); // ejecutamos la consulta para eliminar el registro
		if(isset($result))
			return $result;
}
	function grabarCambios($id, $nom, $des, $precio, $stock, $imagen, $fecha)
	{
		$con = conectar_dblocal();
		if (isset($id)) {
			$sql = "UPDATE productos set nombre='$nom',
			descripcion='$des',
			precio='$precio',
			stock='$stock',
			imagen='$imagen',
			fecha='$fecha' where id=$id";
			mysqli_query($con, $sql);
				// echo $sql;
			echo '<p>Registro Actualizado</p>';
		}
	}

	function EncontrarReg($id)
	{
		$con = conectar_dblocal();
		$consulta = "select * from productos where id=$id";
		$resultado = mysqli_query($con, $consulta);
		$fila = mysqli_fetch_array($resultado);
		return $fila;
	}
	function listarMasVendidos(){
		// inner join con productos
		$con =conectar_dblocal();
		$sql='SELECT id_producto,id_categoria,imagen,nombre,descripcion,precio, Sum(1) AS MasVendido FROM pedidos p INNER JOIN productos pr ON p.id_producto=pr.id GROUP BY id_producto ORDER BY MasVendido DESC LIMIT 0, 5';
		$productos = mysqli_query($con,$sql);
		if ($productos && mysqli_num_rows($productos) >=1 ) {
			$result= $productos;
		}
		return $result;	
	}
	function mostrarErrores($errores){
		
		echo "<div class='errores'>";
		if ($errores>0): 
			echo "<ul style='color: #f00;'>";
			foreach ($errores as $error): 
				echo "<li> ". $error . "</li>";
			endforeach; 
			echo "</ul>";
		endif; 
		echo "</div>";
	}
	function mostrar_errores($errores, $campo){
		$alerta='';
		if (isset($errores[$campo]) && !empty($campo)) {
			$alerta= "<div class='alerta-errores'> ". $errores[$campo] ."</div>";
		}
		return  $alerta;
	}
	function listarCategorias(){

		$con =conectar_dblocal();
		$sql= 'SELECT * FROM categorias WHERE estatus=1';
		$categorias= mysqli_query($con, $sql);
		$result= array();

		if ($categorias && mysqli_num_rows($categorias) >=1 ) {
			$result= $categorias;
		} 
		return $result;
	}

	function conseguirCategoriaProd($nombre){
		$con=conectar_dblocal();
		$sql= "SELECT * FROM productos p INNER JOIN categorias c ON p.id_categoria=c.id_categoria where nombreCategoria='$nombre'AND p.estatus=1 AND p.stock <> 0";
		$categoria= mysqli_query($con, $sql);
		$result= array();

		if ($categoria && mysqli_num_rows($categoria) >=1 ) {
			$result= $categoria;
		} 
		return $result;
	}

	function conseguirCategoriaProd2($nombre,$inicio,$reg_por_pagina){
		$con=conectar_dblocal();
		$sql= "SELECT * FROM productos p INNER JOIN categorias c ON p.id_categoria=c.id_categoria where nombreCategoria='$nombre'AND p.estatus=1 AND p.stock <> 0 limit $inicio,$reg_por_pagina";
		$categoria= mysqli_query($con, $sql);
		$result= array();

		if ($categoria && mysqli_num_rows($categoria) >=1 ) {
			$result= $categoria;
		} 
		return $result;
	}

	function conseguirCat($id){
		$con =conectar_dblocal();
		$sql= "SELECT * FROM categorias WHERE id_categoria='$id'";
		$categorias= mysqli_query($con, $sql);
		$result= array();

		if ($categorias && mysqli_num_rows($categorias) >=1 ) {
			$result= mysqli_fetch_assoc($categorias);
		} 
		return $result;
	}

	function crearCategoria(){

	}


	?>	
	<?php function verListadoProductos($modo){?>
		<form id="form1" name="form1" method="post" action="">

			<table class="highlight" id="pedidos">

				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td width="220">&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>Buscar por nombre</td>
					<td><input type="text" name="buscar" id="buscar"></td>
					<td><input type="submit" class="  btn-small  pink accent-2" name="submit" id="submit" value="aceptar">
					</form></td>
				</tr>
				<tr>
					<td colspan="8" align="center">Listado de productos</td>
				</tr>
				<tr>
					<td align="center" bgcolor="#E4D0F4">ID</td>
					<td align="center" bgcolor="#E4D0F4">IMAGEN</td>
					<td align="center" bgcolor="#E4D0F4">TÍTULO</td>
					<td align="center" bgcolor="#E4D0F4">DESCRIPCIÓN</td>
					<td align="center" bgcolor="#E4D0F4">PRECIO</td>
					<td align="center" bgcolor="#E4D0F4">STOCK</td>
					<td align="center" bgcolor="#E4D0F4">FECHA</td>
					<td align="center" bgcolor="#E4D0F4">ACTUALIZACIONES</td>

				</tr>
				<?php

				$con = conectar_dblocal(); 
				$consulta = "SELECT * FROM productos WHERE estatus=1 "; 
				if (isset($_POST['buscar'])) { 
					$consulta = "select * from productos where nombre like '%" . $_POST['buscar'] . "%' or stock like '%" . $_POST['buscar'] . "%'"; 
				}
				$resultado = mysqli_query($con, $consulta);

				while ($filas = mysqli_fetch_array($resultado)) { 
					$id = $filas['id'];
					$imagen = $filas['imagen'];
					$nombre = $filas['nombre'];
					$desc = $filas['descripcion'];
					$precio = $filas['precio'];
					$stock = $filas['stock'];
					$fecha = $filas['fecha'];

					?> 
					<tr>
						<?php  if($modo<> 'editar'){?>  

							<td bgcolor="#FBFBEF"><?php echo $id ?></td>
							<td bgcolor="#FBFBEF"><img src="<?php echo $imagen?>" width="120"
								height="154"></td> 
								<td bgcolor="#FBFBEF"><?php echo $nombre ?></td>
								<td bgcolor="#FBFBEF"><?php echo $desc ?></td>
								<td bgcolor="#FBFBEF"><?php echo $precio ?></td>
								<td bgcolor="#FBFBEF"><?php echo $stock ?></td>
								<td bgcolor="#FBFBEF"><?php echo $fecha ?></td>
								<td bgcolor="#FBFBEF">
									<form id="compra" name="compra" method="post" action="carrito.php">
										<input type="hidden" name="id_txt" value="<?php echo $id ?>" /> <input
										type="hidden" name="nombre" value="<?php echo $nombre ?>" /> <input
										type="hidden" name="precio" value="<?php echo $precio ?>" /> <input
										type="hidden" name="cantidad" value="1" /> <input type="submit" class="btn" name="comprar" value="Comprar" />

									</form>
								<?php } else{?>   

									<td bgcolor="#FBFBEF"><?php echo $id ?></td>
									<td bgcolor="#FBFBEF"><img src="<?php echo $imagen?>" width="120"
										height="154" /></td>
										<td bgcolor="#FBFBEF"><?php echo $nombre ?></td>
										<td bgcolor="#FBFBEF"><?php echo $desc ?></td>
										<td bgcolor="#FBFBEF"><?php echo $precio ?></td>
										<td bgcolor="#FBFBEF"><?php echo $stock ?></td>
										<td bgcolor="#FBFBEF"><?php echo $fecha ?></td>
										<td bgcolor="#FBFBEF">


											<form id="compra" name="compra" method="post" action="editar.php">
												<input type="hidden" name="id2" value="<?php echo $id ?>" /> <input
												type="hidden" name="imagen2" value="<?php echo $imagen ?>" /> <input
												type="hidden" name="nombre2" value="<?php echo $nombre ?>" /> <input
												type="hidden" name="desc2" value="<?php echo $desc ?>" /> <input
												type="hidden" name="precio2" value="<?php echo $precio ?>" /> <input
												type="hidden" name="cantidad2" value="<?php echo $stock ?>" /> <input
												type="hidden" name="fecha2" value="<?php echo $fecha ?>" /> <input
												type="submit" class="btn-small" name="editar" value="Editar" />
											</form>

											<form action="borrar.php" method="post">
												<input type="hidden" name="id" value="<?php echo $id ?>" />
												<br>
												<input type="submit" class="btn-small" name="" value="Borrar" />

											</form>

											<form action="cargarProductos.php" method="post"><br>
												<input type="submit" class="btn-small" name="" value="Insertar" />

											</form>
										<?php }?>
									</td>

								</tr>

							<?php }?>

						</table>   

					<?php }?>
