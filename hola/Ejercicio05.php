<?php

echo "<h1>Ejercicio 5. strstr</h1>";

$text = "Line 1\nLine 2\nLine 3";
print_r($text);

$last = substr(strrchr($text,10),1);
echo $last;//Devuelve Line 3
echo"<br/>";
$last = substr(strrchr($text,"\n"),1);
echo $last;//Devuelve Line 3
echo"<br/>";
echo '10 y \n es lo mismo dado que 10 corresponde a \n en la tabla ASCII';
?>
