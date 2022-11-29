<?php

	// Iniciar la sesión
	session_start();

	// Variables de sesión:
	$_SESSION['sesion_iniciada'] = true;
	$_SESSION['nombre'] = "PEDRO";

	// Variable de sesión en array:
	$_SESSION['aDatos'] = array();
	$_SESSION['aDatos']['nombre'] = "MARTA";

    echo "Nombre: ".$_SESSION['nombre']."<br />";
    echo "Nombre (en array): ".$_SESSION['aDatos']['nombre']."<p />";

	// Borrar el contenido de las variables y arrays de sesión:
	session_unset();

	// También podríamos hacerlo así:
	//$_SESSION = array();

	echo "<p>Variables y arrays de la sesión borrados</p>";

    if( isset($_SESSION['nombre']) == false )
	echo "Nombre no definido.<br />";

    if( isset($_SESSION['aDatos']['nombre']) == false )
	    echo "Nombre (en array) no definido";

?>
