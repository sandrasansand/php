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
      <th>Nombre</th>
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
    while ($rows =$stmt->fetch()) {
      echo "<tr>";
      echo "<td>";
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
      echo "<h2>Si desea editar sus datos rellene el formulario</h1>";
      echo "</tr>";
      echo "</table>";

      if (isset($_POST['Editar'])){
        if (isset($_GET['dni'])){
          $dni=$_GET['dni'];
        }
        if (empty($_POST['nombre'])) {
          echo "el campo nombre no puede estar vacío";
        } else{
          $nombre=$_POST['nombre'];
        }
        if (empty($_POST['direccion'])) {
          echo "el campo direccion no puede estar vacío";
        } else{
          $direccion=$_POST['direccion'];
        }if (empty($_POST['localidad'])) {
          echo "el campo localidad no puede estar vacío";
        } else{
          $localidad=$_POST['localidad'];
        }if (empty($_POST['provincia'])) {
          echo "el campo provincia no puede estar vacío";
        } else{
          $provincia=$_POST['provincia'];
        }if (empty($_POST['telefono'])) {
          echo "el campo telefono no puede estar vacío";
        } else{
          $telefono=$_POST['telefono'];
        }if (empty($_POST['email'])) {
          echo "el campo email no puede estar vacío";
        } else{
          $email=$_POST['email'];
          comprobarEmail($email);
        }

        $stmt= $con->prepare('UPDATE clientes SET nombre = :nombre, direccion = :direccion, localidad = :localidad, provincia = :provincia, telefono = :telefono, email = :email WHERE dni = :dni');
        $rows= $stmt->execute(array(':dni' => $dni, ':nombre' => $nombre, ':direccion' => $direccion, ':localidad' => $localidad, ':provincia' => $provincia, ':telefono' => $telefono, ':email' => $email));
        if ($rows > 0) {

          header('Location:index.php');

        }

      }
      ?>
      <form name="editarcliente" method="post" action="">
        <?php echo ($dni=$_GET['dni']); ?><br/>
        <strong>Nombre:</strong><br/>
        <input type="text" name="nombre" value="<?php echo $rows[1];?>" ><br/>
        <strong>Direccion:</strong><br/>
        <input type="text" name="direccion" value="<?php echo $rows[2];?>"><br/>
        <strong>Localidad:</strong><br/>
        <input type="text" name="localidad" value="<?php echo $rows[3];?>"><br/>
        <strong>Provincia:</strong><br/>
        <input type="text" name="provincia" value="<?php echo $rows[4];?>"><br/>
        <strong>Teléfono:</strong><br/>
        <input type="text" name="telefono" value="<?php echo $rows[5];?>"><br/>
        <strong>Email:</strong><br/>
        <input type="text" name="email" value="<?php echo $rows[6];?>"><br/>
        <input type="submit" value="Editar" name="Editar" title="Editar" />
        &nbsp;&nbsp;
        <input type="reset" value="Borrar" name="Borrar" title="Borrar" />
      </form>
      <?php  } ?>