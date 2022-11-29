<?php

	session_start();  // Continuar la sesi�n

	if( isset($_SESSION['sesion_iniciada']) == true )
	{

		echo "FINALIZAR LA SESI�N<br />";
		echo "==================<p />";
		
		echo "<p />";
		echo "Identificador de la sesi�n: [".session_id()."]<br/>";
		echo "Nombre de la sesi�n: [".session_name()."]<p/>";

		session_unset();													// Borrar las variables de sesi�n
		setcookie(session_name(), 0, 1 , ini_get("session.cookie_path"));	// Eliminar la cookie
		session_destroy();													// Destruye el resto de informaci�n sobre la sesi�n

		// Comprobar la variable de sesi�n 'nombre':
		if( isset($_SESSION['nombre']) )
			echo "Ahora el nombre es: ".$_SESSION['nombre']."<br />";
		else
			echo "La variable de sesi�n 'nombre' no est� definida.<br />";

		// Comprobar la variable de sesi�n 'edad':
		if( isset($_SESSION['edad']) )
			echo "Ahora la edad es: ".$_SESSION['edad']."<br />";
		else
			echo "La variable de sesi�n 'edad' no est� definida.<br />";

		// Comprobar el array de sesi�n 'aDatos':
		if( isset($_SESSION['aDatos']) )
		{
			echo "Ahora el nombre (en array) es: ".$_SESSION['aDatos']['nombre']."<br/>";
			echo "Ahora la edad (en array) es: ".$_SESSION['aDatos']['edad']."<br/>";
		}
		else
			echo "La array de sesi�n 'aDatos' no est� definido.";


		echo "<p>SESI�N FINALIZADA CORRECTAMENTE</p>";

	}
	else
	{
		echo "<p>No has pasado por la p�gina principal</p>";
	}

	echo "<a href='02_sesion2.php'>Comprobar los valores en otra p�gina (no se mostrar� nada por haber finalizado la sesi�n)</a><br/>";
	echo "<a href='02_sesion1.php'>Volver a la p�gina principal</a>";

?>		
