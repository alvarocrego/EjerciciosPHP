<?php

echo "<h1>Ejercicio 9. Rehacer ejercio uno sin usar explode</h1>";

$apellidosYnombre = "Crego Tapia, Álvaro";
$nombre=substr(stristr($apellidosYnombre, ","), 1);
echo "El nombre es: ".$nombre;
echo "<br>";
$apellidos=substr(trim("$apellidosYnombre", $nombre ), 0, -1);
echo "Los apellidos son: ".$apellidos;
echo "<br>";
echo "El nombre y apellidos son: ".$nombre ." ".$apellidos;

?>
