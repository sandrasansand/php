<!-- Confeccionar una clase CabeceraPagina que permita mostrar un ítulo, indicarle si queremos que aparecza centrado, a derecha o izquierda, además permite definir el color del fondo y de la fuente -->

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
private $colorFondo;
private $colorFuente;
public function iniciarlizar($tit,$ubi,$colFond,$colFont){
	$this ->titulo = $tit;
	$this ->ubicacion = $ubi;
	$this->colorFondo =$colFond;
	$this ->colorFuente =$colFont;
}
//falta incluir el color de la fuente
public function mostrar(){
	echo '<body style="background-color:'.$this->colorFondo. '">';
	echo '<div style="font-size:40px;text-align:'.$this->ubicacion.'">';
	echo $this->titulo;
	echo '</div>';
	echo '</body>';
}
}
// ">      red"
// <body style="background-color:powderblue;">
$cabecera= new cabeceraPagina();
$cabecera ->iniciarlizar('El blog del programador', 'center','powderblue','');
$cabecera->mostrar();
 ?>
</body>
</html>