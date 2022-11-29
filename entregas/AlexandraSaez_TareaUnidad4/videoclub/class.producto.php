<?php 
abstract class Producto{
	protected $nombre;
	protected $precio;
	public function __construct($nombre){
    	$this->nombre=$nombre;

    }
	public function getNombre(){
		return $this->nombre;
	}

	abstract public function getPrecio();

	public function __toString()
	{
		return $this->nombre;
	}	
}

 ?>