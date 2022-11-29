<!--  Cuando se declaran explícitamente los índices se escribe el
valor del índice seguido por "=>" y el valor del elemento que contiene. -->

<?php 
$capitales=array("Italia" => "Roma","Portugal" => "Lisboa","Francia" => "Paris");
echo "La capital de Francia es  {$capitales['Francia']}";
echo "<br><br>";
/* La segunda forma de crear un array asociativo es añadiendo elementos al 
array, y asignándoles de forma explícita cual es su índice
*/ 
$alturas["Aneto"]=3404;
$alturas["Teide"]=3718;
$alturas["Mulhacen"]=3748;
echo "El Aneto mide {$alturas['Aneto']} metros";

echo "<br><br>";

 /*En este ejemplo primero se relaciona un array con otro a través de índices de tipo cadena. Los valores del primer array sirven a su vez como índices del segundo.*/


$nombres = array("Eva", "Antonio", "Felipe", "Rosa");
$edades = array("Eva" => 28,
"Antonio" => 43,
"Felipe" => 32,
"Rosa" => 55);
for ($i = 0; $i < count($nombres); $i++) {
echo "$nombres[$i] tiene {$edades[$nombres[$i]]} años.<br>";
}




 ?>
