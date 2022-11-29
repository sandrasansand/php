<?php 
function parametrizar_plantilla($variable){
	if (isset($GLOBALS[$variable])) {
		echo $GLOBALS[$variable];
	}else{
		echo 'sin dato';
	}
}
?>
