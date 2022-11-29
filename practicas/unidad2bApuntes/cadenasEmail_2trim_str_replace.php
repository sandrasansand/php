


<?php
$email = "
maurodosantos@pernambuco.es ";
echo "Dirección recibida: '$email'.<br>";
// Eliminamos los espacios en blanco
$email = trim($email);
// Reemplazamos pernambuco.es por pernambuco.com
$email = str_replace("pernambuco.es", "pernambuco.com", $email);
echo "Dirección corregida: '$email'.";
?>