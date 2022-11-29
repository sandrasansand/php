<?php 
include 'funciones.php';
$con=conectar_db();
?>

<head>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <title>Mostrar Clientes</title>
</head>
<body>
  <table border="0" cellpadding="2" cellspacing="1" class="tabla">
    <tr>
      <th>DNI</th>
      <th>Buenos días:</th>
      <th>Dirección</th>
      <th>Localidad</th>
      <th>Provincia</th>
      <th>Teléfono</th>
      <th>Email</th>
    </tr>
    <?php  
    $dni = $_GET['dni'];
    $stmt=$con->prepare("SELECT * FROM clientes WHERE dni = :dni");

    $rows=$stmt->execute(array(':dni'=> $dni));
//var_dump($rows);

    while ($rows =$stmt->fetch()) {
      echo "<tr>";
      echo "<td>";
 // $rows[0]=$dni;
      echo $rows[0];
      echo "</td>";
      echo "<td>";
      echo $rows[1];
      echo "</td>";
      echo "<td>";
      echo $rows[2];
      echo "</td>";
      echo "<td>";
      echo $rows[3];
      echo "</td>";
      echo "<td>";
      echo $rows[4];
      echo "</td>";
      echo "<td>";
      echo $rows[5];
      echo "</td>";
      echo "<td>";
      echo $rows[6];
      echo "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "</table>";
      echo "</tr>";
    }

    echo "<h2>Si está seguro que desea eliminar sus datos introduzca su dni: </h3>";
    echo "<br>";
    if (isset($_POST['Enviar'])){
     if (isset($_GET['dni'])) {
      echo "El dni no puede estar vacío";
    }else{
      $dni=$_GET['dni'];
      dni_valido($dni);
	//var_dump($dni);
    }
    if (isset($dni)) {
     $stmt =$con->prepare('DELETE FROM clientes WHERE dni = :dni');
     $rows = $stmt->execute(array(':dni' => $dni));
     if ($rows > 0) {
      header('Location:index.php');
    }else{
      echo "Error en el borrado";
    }

  }
}


?>
<form name="borrar" method="post" action="">
  <strong>Dni:</strong><br/>
  <input type="text" name="dni" size="9" maxlength="9" ><br>
  <input type="submit" value="Enviar" name="Enviar" title="Enviar" /><br/><br>
</form>
<div class="center">
  <button onclick="location.href='index.php'">Cancelar</button>
</div>