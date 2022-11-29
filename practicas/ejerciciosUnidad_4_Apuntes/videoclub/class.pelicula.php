<?php 
/**
 * 
 */
class Pelicula extends Producto
{
	private $idioma;
	private $duracion;
	private $genero;
	public function __construct($nombre,$idioma,$duracion,$genero)
	{
		//$this->nombre = $nombre;
		parent::__construct($nombre);
		$this ->precio = 2;
		$this->idioma = $idioma;
		$this->duracion =$duracion;
		$this->genero = $genero;
	}
//metodo abstracto implementado aqui , pertenciente a la clase abs producto
	public function getPrecio(){
		return $this->precio;
	}
	public function getIdioma(){
		return $this->idioma;
	}
	public function getDuracion(){
		return $this->duracion;
	}



	public function imprimirDatos(){
		echo "<pre>";
		echo "\t........................................\n";
//return parent::toString()."Idioma : {$this->idioma}, Duracion : {$this->duracion}, Precio: {$this->precio}";
		echo "\tNombre: ".$this->nombre."\n";
		echo "\tIdioma: ".$this->idioma."\n";
		echo "\tDuracion: ".$this->duracion."\n";
		echo "\tPrecio: ".$this->precio."\n";

		echo "\t........................................\n";
		echo "</pre>";
		echo "<br />";

	}

	public function __toString(){
		parent::__toString();
		$Idioma = $this->idioma;
		$Duracion= $this->duracion;
		$Precio=$this->precio;
		return "\tNombre: ".parent::__toString()."\n". "\tIdioma: ". $Idioma."\n" . "\tDuración: ". $Duracion."\n" ."\tPrecio: ". $Precio."\n";
	}
}

?>