<!--  En este ejemplo se usa esta función dos veces para escribir dos
frases en el archivo (Veremos que el fichero se crea al acceder a la página del
script con el navegador).
 fwrite(), que escribe en la posición en la que está el apuntador. Por lo general, si hemos abierto el archivo en modo "a" escribiremos al final del archivo.
Si lo que queremos es sobrescribirlo abriremos el archivo en modo "w", de tal
forma que se borre el contenido al abrirlo y dispondremos de un fichero vacío.

Si queremos crear un archivo bastará que lo abramos con el modo "a" o "w". Al
abrirlo, si el archivo no existe lo creará

  -->

 <?php
 $archivo = fopen("refranes.txt", "a");
 fwrite($archivo, "Si las barbas de tu vecino ves cortar ...\r\n");
 fwrite($archivo, "...pon las tuyas a remojar \r\n"); //inserta salta de linea \r\n en wind
 fclose($archivo);
 ?>
