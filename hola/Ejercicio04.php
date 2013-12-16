<?php

echo "<h1>Ejercicio 4. strstr</h1>";

$email = 'name@example.com';
$domain = strstr($email, 's');
if ($domain === false) {
  echo "No ha encontrado 's' dentro del email"; 
}


?>
