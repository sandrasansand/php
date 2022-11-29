<!-- implementar una clase que muestre una serie de hipervínculos en forma horizontal(básicamente un menú simple de opciones) Lo priemro es pensar que tipo de valores almacenará la clase, en este caso una lista de direcciones web y los titulos de los enlaces, por tanto 2 arrays. Definiremos dos métodos cargarOpcion() y mostar() -->
<!DOCTYPE html>
<html>
<head>
	<title>Pruebas clase lista hipervínculos</title>
</head>
<body>
	<?php 
	class Menu{
		private $enlaces = array();
		private $titulos = array();
//añade a los vectores los datos que llegan como parámetro, conviene darle distinto nombre a los parámetros y a los atributos para no confundirlos
		public function cargarOpcion($en,$tit){
//se almacena al final del array
			$this -> enlaces[]=$en;
			$this -> titulos[]=$tit;
		}
		public function mostrar(){
//recorremos el vector enlaces
			for ($i=0; $i <count($this->enlaces) ; $i++) { 
//dentro del for imprimimos en la pag el hipervinculo. Cuando accedemos a los atrib de la clase se le antecede el operador $this
				echo '<a href="'.$this->enlaces[$i].'">'.$this->titulos[$i].'</a>';
				echo " - ";
			}
		}
	}
//instanciamos el objeto
	$menu1 = new Menu();
//le pasamos los parámetros
	$menu1 ->cargarOpcion('http://www.google.com', 'Google');
	$menu1 ->cargarOpcion('https://portal.edu.gva.es/aules/es/inicio/', 'Aules');
	$menu1 ->mostrar();
	?>
</body>
</html>