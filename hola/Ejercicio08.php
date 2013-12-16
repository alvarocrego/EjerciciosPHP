<?php

echo "<h1>Ejercicio 8. Array_walk y &</h1>";

$frutas = array("d" => "limon", "a" => "naranja", "b" => "banana", "c" => "manzana");

function test_alter(&$elemento1, $clave, $prefijo) {
    $elemento1 = "$prefijo: $elemento1";
}

function test_print($elemento2, $clave) {
    echo "$clave. $elemento2<br />\n";
}

echo "Antes ...:\n";
array_walk($frutas, 'test_print');
array_walk($frutas, 'test_alter', 'fruta');
echo "... y despues:\n";
array_walk($frutas, 'test_print');

echo "Array_walk saca la variable y su valor fuera";
echo "& quiere decir que se asigna el valor por referencia y si no es por referencia no funciona.";
?>
