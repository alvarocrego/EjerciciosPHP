<?php

echo "<h1>Ejercicio 6. strrpos</h1>";

$findme = 'A';
$mystring1 = 'ayz';
$mystring2 = 'ABC';
$pos1 = strpos($mystring1, $findme);
$pos2 = strpos($mystring2, $findme);
if ($pos1 === false) {
echo "The string '$findme' was not found in the string '$mystring1'";
}
echo"<br/>";// Nótese el uso de ===
//Usar sólo == no funcionará como se espera
// debido a que la posición de 'a' es el 0º (primer) caracter.
if ($pos2 !== false) {
echo "We found '$findme' in '$mystring2' at position $pos2";
}

echo"<br/>";
echo "Porque al ser booleano devuelve cero o uno y para que detecte que es del mismo tipo hay que a�adirle otro igual";

?>
