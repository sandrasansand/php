<?php

	// Iniciar la sesi�n
	session_start();

	// Variables de sesi�n:
	$_SESSION['sesion_iniciada'] = true;
	$_SESSION['nombre'] = "PEDRO";

	// Variable de sesi�n en array:
	$_SESSION['aDatos'] = array();
	$_SESSION['aDatos']['nombre'] = "MARTA";

    echo "Nombre: ".$_SESSION['nombre']."<br />";
    echo "Nombre (en array): ".$_SESSION['aDatos']['nombre']."<p />";

	// Borrar el contenido de las variables y arrays de sesi�n:
	session_unset();

	// Tambi�n podr�amos hacerlo as�:
	//$_SESSION = array();

	echo "<p>Variables y arrays de la sesi�n borrados</p>";

    if( isset($_SESSION['nombre']) == false )
	echo "Nombre no definido.<br />";

    if( isset($_SESSION['aDatos']['nombre']) == false )
	    echo "Nombre (en array) no definido";

?>
