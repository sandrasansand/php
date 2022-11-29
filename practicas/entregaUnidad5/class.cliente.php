<?php 
class Cliente{
	private $dni;
	private $nombre;
	private $direccion;
	private $localidad;
	private $provincia;
	private $telefono;
	private $email;

	// public function __construct($dni, $nombre, $direccion, $localidad, $provincia, $telefono, $email)
	// {
	// 	$this->dni = $dni;
	// 	$this->nombre = $nombre;
	// 	$this->direccion = $direccion;
	// 	$this->localidad = $localidad;
	// 	$this->provincia = $provincia;
	// 	$this->telefono = $telefono;
	// 	$this->email = $email;
	// }
	public function getDni(){
		return $this->dni;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function getDireccion(){
		return $this->direccion;
	}
	public function getLocalidad(){
		return $this->localidad;
	}
	public function getProvincia(){
		return $this->provincia;
	}
	public function getTelefono(){
		return $this->telefono;
	}
	public function getEmail(){
		return $this->email;
	}

	public function __toString(){
		return "<table><tr>\tDni: {$this->dni},\n \tNombre: {$this->nombre},\n \tDireccion : {$this->direccion},\n \tLocalidad : {$this->localidad},\n \tProvincia: {$this->provincia},\n\tTeléfono: {$this->telefono},\n \tEmail: {$this->email}\n</tr></table>";

	}

	public function imprimirDatos(){
		return $this->dni. ''.$this->nombre.''.$this->direccion.''.$this->localidad.''.$this->provincia.''.$this->telefono.''.$this->email;
	}

}
//prueba clase Cliente 
try {
	$con=new PDO('mysql:host=localhost;dbname=clientes_db','jefe','jefe');
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt=$con->prepare('select * from clientes');
	$stmt->execute();

	$stmt->setFetchMode(PDO::FETCH_CLASS,'Cliente');
	while ($cliente = $stmt->fetch()) {
		
		echo $cliente;
	}
} catch (PDOException $e) {
	echo "Error" . $e->getMessage();
	
}
?>