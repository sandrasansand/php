<?php

	require_once("Persona.php");

	session_start();  // Continuar la sesión

	if( isset($_SESSION['usuario']) == true )
	{

		echo "COMPROBAR LOS VALORES<br />";
		echo "=======================<p />";

		print_r( $_SESSION );

		echo "<p />";

		// Mostrar información del objeto en la sesión:
		echo "Nombre: [".$_SESSION['usuario']->getNombre()."]<br/>";
		echo "Apellidos: [".$_SESSION['usuario']->getApellidos()."]<p/>";

	}
	else
	{
		echo "<p>No has pasado por la página principal</p>";
	}

	echo "<a href='03_sesion1.php'>Volver a la página principal</a>";

?>		
