<?php 
class Cliente{
	private $nombre;
	private $productosAlquilados;

	public function __construct($nombre)
	{
		$this->nombre = $nombre;
		$this->productosAlquilados = array();
	}
	public function getNombre(){
		return $this->nombre;
	}

	public function getproductosAlquilados(){
		return $this->productosAlquilados;
	}
	public function alquilarProducto($producto){
		$this->productosAlquilados[]=$producto;
		return true;
	}

	public function __toString(){
		$resultado= $this->nombre.'<br/>';
		foreach ($this->productosAlquilados as $producto) {
			$resultado .=$producto . '</br>';
		}

		return $resultado;
	}

}

?>