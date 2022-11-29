 
<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
abstract class Trabajador {
protected $nombre;
protected $sueldo;
public function __construct($nom,$sue)
{
$this->nombre=$nom;
$this->sueldo=$sue;
}
public function retornarSueldo()
{
return $this->sueldo; 
}
}
class Empleado extends Trabajador {
}
class Gerente extends Trabajador {
}
$vec[]=new Empleado('alba',1200);
$vec[]=new Empleado('carles',1000);
$vec[]=new Empleado('ana',1000);
$vec[]=new Gerente('xavier',25000);
$vec[]=new Gerente('antonia',8000);
$suma1=0;
$suma2=0;
for($f=0;$f<count($vec);$f++)
{
// Mediante el operador instanceof preguntamos por cada elemento del vector y verificamos si se trata de una instancia de la clase Empleado o de la clase Gerente.

if ($vec[$f] instanceof Empleado)
$suma1=$suma1+$vec[$f]->retornarSueldo();
else
if ($vec[$f] instanceof Gerente)
$suma2=$suma2+$vec[$f]->retornarSueldo();
}
echo 'Gastos en sueldos de Empleados:'.$suma1.'<br>';
echo 'Gastos en sueldos de Gerentes:'.$suma2.'<br>';
?>
</body>
</html>




