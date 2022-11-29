<!-- Vuelve a programar la práctica 2.8 pero esta vez usando 
arrays asociativos. Las estructuras de datos necesarias son: 
•  Un array $precio_kg. Cada elemento tiene como clave el nombre 
del producto y como valor el precio por kg del mismo. 
•  Un  array  $lista_compra.  Cada  elemento  tiene  como  clave  el 
nombre del producto y como valor la cantidad en kg comprada. 
Una  vez  almacenados  los  datos  en  los  arrays  procésalos  mediante 
bucles para obtener el mismo resultado que en el ejercicio 2.8.
 -->

 <?php 
//include '3.10functionEurosPesetas.php';
$precio_kg = array('judias' => 3.50,'patatas' => 0.40,'tomates' => 1,'manzanas' => 1.20,'uvas' => 2.50);
$lista_compra= array('judias' => 1.20, 'patatas' => 1.73,'tomates' =>2.08, 'manzanas' =>2.15, 'uvas' =>0.77);
//hacer un array multidimensional
//recorrer el segundo para añadir los elementos en el primero, en un array auxiliar me guardo los elementos del segundo para recorrer el primero e ir añadiendolos.. 
//declarar variables donde guardar resultados del array nombre preciok y coste
////total

echo "Producto-Precio/Kg-Peso-Precio" . "</br>";

foreach ($precio_kg as $producto => $preciok) {
	echo "$producto - $preciok ";

}
foreach ($lista_compra as $producto => $coste) {
	echo "$coste";
}




 ?>