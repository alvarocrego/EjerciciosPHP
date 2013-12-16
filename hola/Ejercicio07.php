<?php

echo "<h1>Ejercicio 7. stripos</h1>";

$findme = 'A';
$mystring1 = 'abc';
$mystring2 = 'ABC';
$pos1 = stripos($mystring1, $findme);
$pos2 = stripos($mystring2, $findme);
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

echo "Stripos no distingue entre mayusculas y minusculas. Detecta la letra aunque este en minusculas.";
?>
