<?php
$para      = 'sannnd.sa@gmail.com.com';
$titulo    = 'El título';
$mensaje   = 'Hola';
$cabeceras = 'From: cliente@example.com' . "\r\n" .
    'Reply-To: sannnd.sa@gmail.com.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>