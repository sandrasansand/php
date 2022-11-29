<!DOCTYPE html>
<html>
<head>
	<title>probando metodo constructor en clase CabeceraPagina</title>
</head>
<body>
<?php 
class CabeceraPagina{
	private $titulo;
	private $ubicacion;
	private $colorFondo;
	private $colorFuente;

	public function __construct($tit,$ubi,$colFond,$colFont){
		$this->titulo=$tit;
		$this->ubicacion=$ubi;
		$this->colorFondo =$colFond;
		$this ->colorFuente =$colFont;
	}
//falta incluir el color fuente dentro del div
	public function mostrar(){
	echo '<body style="background-color:'.$this->colorFondo. '">';
	echo '<div style="font-size:40px;text-align:'.$this->ubicacion.'">';
	echo $this->titulo;
	echo '</div>';
	echo '</body>';
	}
}

//llamada al constructor
$cabecera = new CabeceraPagina('El blog del programador', 'center','powderblue','');
$cabecera->mostrar();


 ?>
</body>
</html>

