<?php

echo "<h1>Ejercicio 3. Uso de explode</h1>";

$str = 'one|two|three|four|five|six|seven|eight|nine|ten'; // positive limit 
print_r(explode('|', $str, 5)); //a partir del cinc es mostra tots
echo "<br>";
print_r(explode('|', $str, 9));
?>
