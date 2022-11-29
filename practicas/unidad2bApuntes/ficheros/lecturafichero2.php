<!-- Ejemplo 3.5.4. Lectura del archivo “prueba.txt”. Para que el archivo funcione
tendremos que haberlo creado en la misma carpeta que este script, con el
contenido que deseemos. -->
<pre>
	<?php 
	$archivo = fopen("prueba.txt", "r");
	$tamano=filesize("prueba.txt");
	$texto = fread($archivo,$tamano);
	echo ($texto);
	fclose($archivo);
	?>
</pre>