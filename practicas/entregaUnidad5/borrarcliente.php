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
      <th>Buenos días:</th>
    </tr>
    <?php  
    $dni = $_GET['dni'];
    $stmt=$con->prepare("SELECT * FROM clientes WHERE dni = :dni");
    $rows=$stmt->execute(array(':dni'=> $dni));
    while ($rows =$stmt->fetch()) {
      echo "<tr>";
      echo "<td>";
      echo $rows[1];
      echo "</td>";
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