<!-- Aquí se puede ver como listar todos los contenidos del
directorio actual (referenciado mediante la ruta relativa ".") indicando a su vez si
son ficheros o directorios. -->

<?php 
$directorio=opendir(".");
while ($archivo = readdir($directorio)) {
	if (is_file($archivo)) {
		echo "$archivo es un fichero. <br>";
	}
	if (is_dir($archivo)) {
		echo "$archivo es un directorio. <br>";
	}
}

 ?>