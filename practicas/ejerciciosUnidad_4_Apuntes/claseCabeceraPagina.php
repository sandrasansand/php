<!-- Confeccionar una clase cabeceraPagina q permita mostrar titulo, indicarle si queremos que aparezca centrado, a derecha o izquierda. Esta clase deberá tener un método que pueda iniciarlizar los atributos y otro método que muestre la cabecera dentro de la página. -->
<!DOCTYPE html>
<html>
<head>
	<title>Pruebas clase cadecera de página</title>
</head>
<body>
<?php 
class cabeceraPagina{
private $titulo;
private $ubicacion;
public function iniciarlizar($tit,$ubi){
	$this ->titulo = $tit;
	$this ->ubicacion = $ubi;
}
public function mostrar(){
	echo '<div style="font-size=40px;text-align:'. $this->ubicacion.'">';
	echo $this->titulo;
	echo '</div>';
}
}

$cabecera= new cabeceraPagina();
$cabecera ->iniciarlizar('El blog del programador', 'center');
$cabecera->mostrar();
 ?>
</body>
</html>