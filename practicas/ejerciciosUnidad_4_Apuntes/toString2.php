<?php
class Alumno
{
	private $_nombre;
	private $_apellido;
	public function __construct($nombre,$apellido)
	{
		$this->_nombre = $nombre;
		$this->_apellido = $apellido;
	}
	public function __toString()
	{
		return $this->_nombre . ' ' .$this->_apellido;
	}
}
class Escuela
{
	private $_nombre;
	private $_alumnos = array();
	public function __construct($nombre)
	{
		$this->_nombre = $nombre;
	}
	public function addAlumno($alumno)
	{
		$this->_alumnos[] = $alumno;
	}

	public function __toString()
	{
		$retorno = $this->_nombre.'<br />' ;

		foreach ($this->_alumnos as $alumno) {
			$retorno .= $alumno .'<br /> ';

 /*
 * Es lo mismo que decir
 * $retorno .= $alumno->__toString() .' ';
 * solo que el objeto sabe cómo convertirse en string, puesto que
 * detecta cuando se hace una operación de suma de cadenas con el
 * operador ".". */
}
return $retorno;
}

}
$alu1 = new Alumno('Alan','Moore');
$alu2 = new Alumno('Neil','Gaiman');
$escuela = new Escuela('Los Padres Salesianos');
$escuela-> addAlumno($alu1);
$escuela-> addAlumno($alu2);
echo $escuela ;


