<?php

	require_once("Persona.php");

	// Iniciar la sesi�n
	session_start();

	// Crear una instancia del objeto:
	$objPersona = new Persona();
	$objPersona->setNombre("MARTINA");
	$objPersona->setApellidos("MARRERO MEDINA");

	// Variables de sesi�n:
	$_SESSION['usuario'] = $objPersona;

	echo "P�GINA PRINCIPAL<br />";
	echo "================<p />";

	// Mostrar informaci�n del objeto en la sesi�n:
	echo "Nombre: [".$_SESSION['usuario']->getNombre()."]<br/>";
	echo "Apellidos: [".$_SESSION['usuario']->getApellidos()."]<p/>";

	echo "<a href='03_sesion2.php'>Ir a la otra p�gina</a><br/>";

?>