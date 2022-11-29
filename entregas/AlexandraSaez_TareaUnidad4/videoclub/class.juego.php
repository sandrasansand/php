<?php 
class Juego extends Producto{
	private $plataforma;
	private $genero;

	public function __construct($nombre,$plataforma, $genero)
	{
		parent::__construct($nombre);
		$this->precio =3;
		$this->plataforma = $plataforma;
		$this->genero = $genero;
	}
	public function getPrecio(){
		return $this->precio;
	}
	public function getPlataforma(){
		return $this->plataforma;
	}
	public function getGenero(){
		return $this->genero;
	}
	public function imprimirDatos(){
		echo "<pre>";
		echo "\t........................................\n";
//return parent::toString()."Plataforma : {$this->plataforma}, Genero : {$this->genero}, Precio: {$this->precio}";
		echo "\tNombre: ".$this->nombre."\n";
		echo "\tPlataforma: ".$this->plataforma."\n";
		echo "\tGenero: ".$this->genero."\n";
		echo "\tPrecio: ".$this->precio."\n";

		echo "\t........................................\n";
		echo "</pre>";
		echo "<br />";
	}

	public function __toString(){
		parent::__toString();
		$Plataforma = $this->plataforma;
		$Genero= $this->genero;
		$Precio=$this->precio;
		return "\tNombre: ".parent::__toString()."\n". "\tPlataforma: ". $Plataforma."\n" . "\tGenero: ". $Genero."\n" ."\tPrecio: ". $Precio."\n";
	}

}

?>