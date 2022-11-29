<?php

	// Si se usa debe contener (s�lo caracteres alfanum�ricos) e ir antes de session_start():
	session_id("identificadorDeSesion");	

	// Iniciar la sesi�n
	session_start();

	// Variables de sesi�n:
	$_SESSION['sesion_iniciada'] = true;	
	$_SESSION['nombre'] = "PEDRO";
	$_SESSION['edad'] = 33;

	// Variable de sesi�n en array:
	$_SESSION['aDatos'] = array();
	$_SESSION['aDatos']['nombre'] = "MARTA";
	$_SESSION['aDatos']['edad'] = 37;

	echo "P�GINA PRINCIPAL<br />";
	echo "================<p />";

	// Mostrar informaci�n de la sesi�n:
	echo "Identificador de la sesi�n: [".session_id()."]<br/>";
	echo "Nombre de la sesi�n: [".session_name()."]<p/>";

	// Mostrar valores de las variables de sesi�n creadas:
	echo "Nombre: ".$_SESSION['nombre']."<br />";
	echo "Edad: ".$_SESSION['edad']."<p />";

	// Mostrar valores en el array de sesi�n creado:
	echo "Nombre (en array): ".$_SESSION['aDatos']['nombre']."<br />";
	echo "Edad (en array): ".$_SESSION['aDatos']['edad']."<p />";

	echo "<a href='02_sesion2.php'>Comprobar los valores en otra p�gina</a><br/>";
	echo "<a href='02_sesion3.php'>Finalizar la sesi�n</a>";

?>