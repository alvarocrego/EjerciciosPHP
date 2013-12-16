<?php
echo "<h1>Ejercicio 1. Uso de explode</h1>";

$apellidosYnombre = "Crego Tapia, Álvaro";
$resultado = explode(" ", $apellidosYnombre);

echo "Los apellidos son: $resultado[0] $resultado[1] <br>";
echo "El nombre es: $resultado[2] <br>";
echo "El nombre y apellidos son: $resultado[2] $resultado[0] $resultado[1]<br>";
var_dump($resultado);
echo "<br>";
print_r($resultado);
echo "<br>";
echo "La diferencia entre var_dump y print_r es que var_dump incluye el tipo y el valor de la variable y print_r no."; 
?>
