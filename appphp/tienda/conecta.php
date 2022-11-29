<?php

function conectar_db(){

    $server = "localhost"; 
    $user = "root"; 
    $pass = ""; 
    $bd = "tienda"; 

/*
$server ="db738041399.db.1and1.com";
$user = "dbo738041399";
$pass = "Desarrolloweb123.";
$bd= "db738041399";

*/

    $conexion = mysqli_connect($server, $user, $pass,$bd) 
        or die("Ha sucedido un error inexperado en la conexion de la base de datos". mysqli_connect_error());

    return $conexion;
} 

?>
<?php
$con= conectar_db();
define ('BASE_URL','http://localhost/tienda/');  //minuto 16 eb adelante http://db738041399.db.1and1.com/dbo738041399

function base_URL($cad){
return BASE_URL.$cad;  //ESTA funcion concatena la base_url con la cadena que le pasemos
}


?>



<?php

function ActualizarStock($id,$can){

	$sql="select * from products where id=$id";
	$resultado=mysqli_query($conexion,$sql);
	$fila=mysqli_fetch_array($resultado);
	$enStock=$fila['stock']; //la cantidad del stock de la base de datos
   //le paso el id del producto y la cantidad completa y escribo en la bd

if(isset($id)){
	$can=$enStock-$can;
	$sql2="UPDATE products set stock='$can' where id=$id";
	mysqli_query($conexion,$sql2);
	// echo $sql2;
	echo '<p>Registro Actualizado</p>';

	}

}
?>




<?php function verListadoProductos($modo){?>
	<form id="form1" name="form1" method="post" action="">

	<table width="200" border="0" algin="left" >

	    <tr>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
	      <td width="220">&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>buscar</td>
	      <td>
          <input type="text" name="buscar" id="buscar"></td>
	      <td><input type="submit" name="submit" id="submit" value="aceptar">	</form></td>
        </tr>
	    <tr>
	      <td colspan="8" align="center">Listado de productos</td>
        </tr>
	    <tr>
	      <td align="center" bgcolor="#E4D0F4">ID</td>
	      <td align="center" bgcolor="#E4D0F4">IMAGEN</td>
	      <td align="center" bgcolor="#E4D0F4">NOMBRE</td>
	      <td align="center" bgcolor="#E4D0F4">DESCRIPCIÓN</td>
	      <td align="center" bgcolor="#E4D0F4">PRECIO</td>
	      <td align="center" bgcolor="#E4D0F4">STOCK</td>
	      <td align="center" bgcolor="#E4D0F4">FECHA</td>
	      <td align="center" bgcolor="#E4D0F4">AGREGAR</td>
        </tr>
		  <?php 
		
		
		 $con=conectar_db(); //inicializamos la función y guardamos la conexión
		 $consulta = "SELECT * FROM products";  //realizamos la consulta general en la tabla

		 
		 if(isset($_POST['buscar'])){  //comprobamos si existe, si no por post nos llega la búsqueda
			$consulta= "select * from products where nombre like '%".$_POST['buscar']."%'"; //consultamos para ver en la base de datos si coincide lo que nos llega por POST
         
	 
		 }
	    $resultado= mysqli_query($con,$consulta);

	    while ($filas=mysqli_fetch_array($resultado)){   //recorremos y nos guardamos todos los campos de la base, cada uno en una variable
			  $id =$filas ['id'];                       
			  $imagen =$filas['imagen'];
			  $nombre =$filas['nombre'];
			  $desc =$filas['descripcion'];
			  $precio =$filas['precio'];
			  $stock =$filas['stock'];
			  $fecha =$filas['fecha'];
			//  $agregar='<a href="carrito.php?id='.$filas['id'].'"title='.$filas['id'].'">Agregar</a>';
			   //mas abajo se entrará o no en modo edición o en modo normal comprar , dependiendo de la variable $modo que le pasamos a la funcion
		//la funcion es llamada en principal.php y le hemos pasado'comprar'. Luego con echo mostramos el contenido almacenado en cada variable
		  ?>
		    
		
		
		  
	    <tr>
          <?php  if($modo<> 'editar'){?>  <!--antes era 'edicion' si es distinto a editar entra en modo comprar, sino salta y entra a editar -->
            
	     <td bgcolor="#FBFBEF"><?php echo $id ?></td>  
		 <td bgcolor="#FBFBEF"><img src="<?php echo $imagen?>" width="120" height="154" </td>
	     <td bgcolor="#FBFBEF"><?php echo $nombre ?></td>
	     <td bgcolor="#FBFBEF"><?php echo $desc ?></td>
	     <td bgcolor="#FBFBEF"><?php echo $precio ?></td>
	     <td bgcolor="#FBFBEF"><?php echo $stock ?></td>
	     <td bgcolor="#FBFBEF"><?php echo $fecha ?></td>
	      <td bgcolor="#FBFBEF">
    <form id="compra" name="compra" method="post" action="carrito.php">
		      <input type="hidden" name="id_txt" value="<?php echo $id ?>"/>
    		   <input type="hidden" name="nombre" value="<?php echo $nombre ?>"/>
            <input type="hidden" name="precio" value="<?php echo $precio ?>"/>
    		   <input type="hidden" name="cantidad" value="1"/>
    		  
		      <input type="submit" name="comprar" value="Comprar"/>
       
		  </form>
          <?php } else{?>   <!-- si entra en editar hace esto  imprime el contenido y vamos a la pagina editar.php -->
          
    <td bgcolor="#FBFBEF"><?php echo $id ?></td>
		 <td bgcolor="#FBFBEF"><img src="<?php echo $imagen?>" width="120" height="154" /></td>
	     <td bgcolor="#FBFBEF"><?php echo $nombre ?></td>
	     <td bgcolor="#FBFBEF"><?php echo $desc ?></td>
	     <td bgcolor="#FBFBEF"><?php echo $precio ?></td>
	     <td bgcolor="#FBFBEF"><?php echo $stock ?></td>
	     <td bgcolor="#FBFBEF"><?php echo $fecha ?></td>
	      <td bgcolor="#FBFBEF">
            
              
    <form id="compra" name="compra" method="post" action="editar.php">
		      <input type="hidden" name="id2" value="<?php echo $id ?>"/>  
             <input type="hidden" name="imagen2" value="<?php echo $imagen ?>"/>
    		   <input type="hidden" name="nombre2" value="<?php echo $nombre ?>"/>
             <input type="hidden" name="desc2" value="<?php echo $desc ?>"/>
            <input type="hidden" name="precio2" value="<?php echo $precio ?>"/>
    		   <input type="hidden" name="cantidad2" value="<?php echo $stock ?>"/>
    		   <input type="hidden" name="fecha2" value="<?php echo $fecha ?>"/>
		      <input type="submit" name="comprar" value="editar"/>
    </form>
    
    <form action="borrar.php" method="post" >
    <input type="hidden" name="id" value="<?php echo $id ?>"/> <!-- el value corresponde al articulo almacenado en $id,por post -->
    <input type="submit" name="" value="Borrar"/>                                                              <!--   enviamos el id almacenado en name que va a borrar.-->
    </form>
	
	  <form action="cargarProductos.php" method="post" >
      <input type="submit" name="" value="Agregar"/>                                                              <!--   enviamos el id almacenado en name que va a borrar.-->
      </form>

	<p><a href="galeria.php"> Tienda</a></p>
    
          <?php }?>
          </td>

        </tr>
  	  	     
	<?php }?>
 	 
    </table>   

   <?php }?>
   
   
   <?php
   function EncontrarReg($id){
      $con=conectar_db();
      $consulta="select * from products where id=$id";
      $resultado= mysqli_query($con,$consulta);
      $fila= mysqli_fetch_array($resultado);
      return $fila;
      }
      
   
     ?>
   <?php
   function grabarCambios($id,$nom,$des,$precio,$stock,$imagen,$fecha){
      //escribo en mi base de datos
       $con=conectar_db();
      if (isset($id)){
         $cad="UPDATE products set nombre='$nom',
         descripcion='$des',
         precio='$precio',
         stock='$stock',
         imagen='$imagen',
         fecha='$fecha' where id=$id";
         mysqli_query($con,$cad);
        //echo $cad;
        echo '<p>Registro Actualizado</p>';
      }
   }
   
   
   
   function borrar($id){
      $con=conectar_db();
      $sql= "DELETE from products where id=$id";
      mysqli_query($con,$sql);             //ejecutamos la consulta para eliminar el registro
      echo 'Registro eliminado exitosamente';
      
   }
   
   function mostrarUsuarios(){
   	
   }
   
   ?>