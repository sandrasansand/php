<? include_once("iniciarSistemaCompras.php");
 include_once("cabecera.php"); ?>

<body>
  Bienvenido al e_comerce su tienda online
  <form method="post" action="decompras.php">
    Nombre del cliente: <input type="text" name="cli" value="">
    <input type="submit" name="acc" value="Iniciarcompras">
  </form>
</body>
</html>
