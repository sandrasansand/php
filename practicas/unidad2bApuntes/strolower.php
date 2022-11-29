<?php
echo "Comparación de cadenas directamente: ";
if ("MADRID" == "Madrid") {
echo "MADRID es igual a Madrid<br>";
} else {
echo "MADRID no es igual a Madrid<br>";
}
echo "<br>";
echo "Antes de comparar pasamos ambas a minúsculas: ";
if (strtolower("MADRID") == strtolower("Madrid")) {
echo "MADRID es igual a Madrid<br>";
} else {
echo "MADRID no es igual a Madrid<br>";
}
?>
