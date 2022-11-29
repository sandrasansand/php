<?php 
include_once 'class.cliente.php';
include_once 'class.producto.php';
include_once 'class.pelicula.php';
include_once 'class.cd.php';
include_once 'class.juego.php';

class Videoclub{
	private $nombre;
	private $productos;
	private $clientes;

	public function __construct($nombre)
	{
		$this->nombre = $nombre;
		$this->productos = array();
		$this->clientes = array();
	}
	public function addProducto($producto){
		$this->productos[]=$producto;

	}

	public function getProductos(){
		return $this->productos;
	}

	public function addCliente($cliente){
		$this->clientes[]=$cliente;

	}

	public function getClientes(){
		return $this->clientes;
	}

	public function alquilar($cliente,$producto){
		$cliente->alquilarProducto($producto);
	}

	public function estaAlquiladoProducto($producto){
		if ($this->productosAlquilados[]=$producto) {
			echo $producto."Este producto está alquilado";
		} else{
			echo $producto. "Este producto no se encuentra inicializado";
		}
	}


	public function __toString(){
		$retorno ='<b>Nombre Videoclub: </b>'. $this->nombre.'<br />'.'<br/>' ;

		foreach ($this->productos as $producto) {
			$retorno .= '<b>Productos Alquilados: </b>'.'<br/>'. $producto .'<br /> ';

		}
		echo "<br>";

		foreach ($this->clientes as $cliente) {
			$retorno .= '<b>Nombre de Cliente Y Producto/s en alquiler :</b> '.'<br/>' . $cliente .'<br /> ';
		}

		return $retorno;

	}

}

?>