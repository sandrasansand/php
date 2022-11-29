<?php 
class Cd extends Producto{
	private $duracion;
	private $genero;

	public function __construct($nombre,$duracion, $genero)
	{
		parent::__construct($nombre);
		$this->precio=1;
		$this->duracion = $duracion;
		$this->genero = $genero;
	}
	public function getPrecio(){
		return $this->precio;
	}
	public function getDuracion(){
		return $this->duracion;
	}
	public function getGenero(){
		return $this->genero;
	}

	public function imprimirDatos(){
		echo "<pre>";
		echo "\t........................................\n";
		echo "\tNombre: ".$this->nombre."\n";
		echo "\tDuracion: ".$this->duracion."\n";
		echo "\tGenero: ".$this->genero."\n";
		echo "\tPrecio: ".$this->precio."\n";
		echo "\t........................................\n";
		echo "</pre>";
		echo "<br />";

	}
	public function __toString(){
		return "\tNombre: " . parent::__toString() ."\n"."\tDuracion : {$this->duracion},\n \tGenero : {$this->genero}, \n\tPrecio: {$this->precio}\n";

	}
}

?>