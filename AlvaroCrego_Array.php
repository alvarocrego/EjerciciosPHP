<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "<h1>ARRAY UNIDIMENSIONAL ESCALAR (Indexado numéricamente).</h1>";

$productos = array("MESA", "SILLA", "FLEXO", "ESTANTERIA");

echo "<h3>a)</h3>";

echo $productos[0] . "<br/>";
echo $productos[1] . "<br/>";
echo $productos[2] . "<br/>";
echo $productos[3] . "<br/>";

echo "<h3>b)</h3>";

for ($x = 0; $x < 4; $x++) {
    echo $productos[$x] . "<br/>";
}

echo "<h3>c)</h3>";

for ($x = 0; $x < count($productos); $x++) {
    echo $productos[$x] . "<br/>";
}

echo "<h3>d)</h3>";
$x = 0;
while ($x < count($productos)) {
    echo $productos[$x] . "<br/>";
    $x++;
}

echo "<h3>e)</h3>";

foreach ($productos as $value) {
    echo "$value" . "<br/>";
}

echo "<h1>ARRAY UNIDIMENSIONAL ASOCIATIVO.</h1>";

$productos2 = array("M" => "MESA", "S" => "SILLA", "F" => "FLEXO", "E" => "ESTANTERIA");

echo "<h3>f)</h3>";

echo $productos2["M"] . "<br/>";
echo $productos2["S"] . "<br/>";
echo $productos2["F"] . "<br/>";
echo $productos2["E"] . "<br/>";

echo "<h3>g)</h3>";

while (list(, $valor) = each($productos2)) {
    echo "$valor<br/>";
}

echo "<h3>h)</h3>";

foreach ($productos2 as $valor) {
    echo "$valor<br/>";
}

echo "<h1>ARRAY BIDIMENSIONAL ESCALAR (Indexado numéricamente).</h1>";

$animales = array(array("Perro", "Mastin", 100), //00-01-02
    array("Gato", "Persa", 150), //10-11-12
    array("Gato", "Siames", 190), //20-21-22
    array("Perro", "Boxer", 25), //30-31-32
    array("Canario", "Timbrado", 250)); //40-41-42

print_r($animales);
echo "<br>";

echo "<h3>i)</h3>";

$animales0 = $animales[0];

echo $animales0[0] . "<br/>";
echo $animales0[1] . "<br/>";
echo $animales0[2] . "<br/><br/>";

$animales1 = $animales[1];

echo $animales1[0] . "<br/>";
echo $animales1[1] . "<br/>";
echo $animales1[2] . "<br/><br/>";

$animales2 = $animales[2];

echo $animales2[0] . "<br/>";
echo $animales2[1] . "<br/>";
echo $animales2[2] . "<br/><br/>";

$animales3 = $animales[3];

echo $animales3[0] . "<br/>";
echo $animales3[1] . "<br/>";
echo $animales3[2] . "<br/><br/>";

$animales4 = $animales[4];

echo $animales4[0] . "<br/>";
echo $animales4[1] . "<br/>";
echo $animales4[2] . "<br/>";

echo "<h3>j)</h3>";

while (list(, $valor) = each($animales)) {
    for ($x = 0; $x < count($valor); $x++) {
        echo $valor[$x] . "<br/>";
    }
}

echo "<h3>k)</h3>";

for ($x = 0; $x < count($animales); $x++) {
    $subarray = $animales[$x];
    for ($y = 0; $y < count($subarray); $y++) {
        echo $subarray[$y] . "<br/>";
    }
}

echo "<h3>l)</h3>";

foreach ($animales as $subarray1) {
    foreach ($subarray1 as $value) {
        echo "$value" . "<br/>";
    }
}

echo "<h1>ARRAY BIDIMENSIONAL ASOCIATIVO.</h1>";

$productos = array(array("Codigo" => "CB", "Descripcion" => " Cebollas", "Precio" => 100),
    array("Codigo" => "AC", "Descripcion" => "Aceite", "Precio" => 120),
    array("Codigo" => "MZ", "Descripcion" => "Manzanas", "Precio" => 92)
);
print_r($productos);
echo "<br>";
echo "<br>";
echo "<br>";


$productos2 = array("prod1" => array("Codigo" => "CB", "Descripcion" => " Cebollas", "Precio" => 100),
    "prod2" => array("Codigo" => "AC", "Descripcion" => "Aceite", "Precio" => 120),
    "prod3" => array("Codigo" => "MZ", "Descripcion" => "Manzanas", "Precio" => 92)
);
print_r($productos2);
echo "<br>";
echo "<br>";
echo "<br>";


echo "<h3>m)</h3>";



echo "<h3>n)</h3>";

echo "<h3>o)</h3>";

