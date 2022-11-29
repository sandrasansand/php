<!-- clase Empleado, atributos nombre y sueldo. Método inicializar() que imprima el nombre, y un mensaje si debe o no pagar impuestos(si el sueldo supera los 3000 paga impuestos). -->

<?php 
class Empleado{
	private $nombre;
	private $sueldo;

	public function inicializar($nom, $sueldo){
		$this->nombre =$nom;
		$this ->sueldo =$sueldo;

	}

	public function imprimir(){
		
		
		if ($this->sueldo > 3000) {
			echo $this -> nombre .'<br>'. " Usted debe pagar impuestos ";
		}

	}
}
$empl1 = new Empleado();
$empl1 ->inicializar('Sandra',3500);
$empl1 ->imprimir();
?>