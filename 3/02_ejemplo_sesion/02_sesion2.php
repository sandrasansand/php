<?php

	session_start();  // Continuar la sesi�n

	if( isset($_SESSION['sesion_iniciada']) == true )
	{

		echo "COMPROBAR LOS VALORES<br />";
		echo "=======================<p />";

		print_r( $_SESSION );

		echo "<p />";
		echo "Identificador de la sesi�n: [".session_id()."]<br/>";
		echo "Nombre de la sesi�n: [".session_name()."]<p/>";

		echo "<p/>";

		echo "Nombre: ".$_SESSION['nombre']."<br/>";
		echo "Edad: ".$_SESSION['edad']."<p/>";

		echo "Nombre (en array): ".$_SESSION['aDatos']['nombre']."<br/>";
		echo "Edad (en array): ".$_SESSION['aDatos']['edad']."<p/>";

	}
	else
	{
		echo "<p>No has pasado por la p�gina principal</p>";
	}

	echo "<a href='02_sesion1.php'>Volver a la p�gina principal</a>";

?>		
