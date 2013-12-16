<?php

echo "<h1>Ejercicio 2. Uso de explode</h1>";

$pizza = "piece1 piece2 piece3 piece4 piece5 piece6"; 
$pieces = explode(" ", $pizza); 

for ($x=0;$x<count($pieces); $x++){
	echo $pieces[$x]."<br/>";
}
?>
