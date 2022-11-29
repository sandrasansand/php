<?php
class Juego {
private $titulo;
private $motor;
private $personaje;
public function __construct($t, $m, $p){
$this->titulo = $t;
$this->motor = $m;
$this->personaje = $p;
}
public function setTitulo($t) {
$this->titulo = $t;
}
public function getTitulo() {
return $this->titulo;
}
public function setMotor($m) {
$this->motor = $m;
}
public function getMotor() {
return $this->motor;
}
public function setPersonaje($p) {
$this->personaje = $p;
}
public function getPersonaje() {
return $this->personaje;
}
public function toString() {
echo "<pre>";
echo "\t........................................\n";
echo "\tTitulo: ".$this->titulo."\n";
echo "\tMotor: ".$this->motor."\n";
echo "\tPersonaje: ".$this->personaje."\n";

echo "\t........................................\n";
echo "</pre>";
echo "<br />";
}
}


class Personaje {
private $nombre;
private $edad;
private $bebida;
public function __construct($n, $e, $b){
$this->nombre = $n;
$this->edad = $e;
$this->bebida = $b;
}
public function setNombre($n) {
$this->nombre = $n;
}
public function getNombre() {
return $this->nombre;
}
public function setEdad($e) {
$this->edad = $e;
}
public function getEdad() {
return $this->edad;
}
public function setBebida($b) {
$this->bebida = $b;
}
public function getBebida() {
return $this->bebida;
}
public function toString() {
echo "\tPersonaje: \n";
echo "\t\tNombre: ".$this->getNombre()."\n";
echo "\t\tEdad: ".$this->getEdad()."\n";
echo "\t\tBebida: ".$this->getBebida()."\n";
}
}

$guybrush = new Personaje("pepito", 21 , "piña colada");
$monkey = new Juego("The Secret of Monkey Island", "SCUMM",'secundario');

echo "IMPRIMIENDO CON TOSTRING:<br />";
$guybrush->toString();
$monkey->toString();
?>