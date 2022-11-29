<!-- Mediante este programa se muestran las propiedades del archivo “prueba.txt”.
 -->

 <?php
$ruta = "prueba.txt";
if (file_exists($ruta)) {
echo "$ruta tiene un tamaño de "; 
echo filesize($ruta) . " 
bytes.<br>";
if (is_file($ruta)) {
echo "$ruta es un fichero.<br>";
}
if (is_dir($ruta)) {
echo "$ruta es un directorio.<br>";
}
if (is_readable($ruta)) {
echo "$ruta se puede abrir para lectura.<br>";
}
if (is_writable($ruta)) {
echo "$ruta se puede abrir para escritura.<br>";
}
} else {
echo "$ruta no existe.";
}
?>
