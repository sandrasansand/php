<!-- clase persona, strib privado nom, 2 métodos uno carga el nombre otro lo imprime -->
<!DOCTYPE html>
<html>
<head>
	<title>Clase persona pruebas</title>
</head>
<body>
<?php 
class  Persona
{	
	private $nombre;
	
	public function inicializar($nom)
	{
		//cuando accedemos a los atrib dentro de los métodos debemos utilizar los oper $this->
		$this -> nombre = $nom;
	}
	public function imprimir(){
		echo $this -> nombre;
		echo '<br>';
	}
	
}

$per1= new Persona();
$per1 -> inicializar('Juan');
$per1 -> imprimir();
$per2= new Persona();
$per2 ->inicializar('Ana');
$per2 ->imprimir();
?>
</body>
</html>
