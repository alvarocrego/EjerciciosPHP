<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "<h1>Ejercicio 1</h1>";

$arr = array ("Mamifero" => "Ballena","Insecto" => "Hormiga"); 
reset($arr); 
while( list($valor)=each($arr)) echo "Indice: $valor<br/>"; 

echo "<h1>Ejercicio 2</h1>";
echo "<h3>while</h3>";
reset($arr);
while (list($indice,$valor)=each($arr)) echo "$indice - $valor<br/>";

echo "<h3>foreach</h3>";

foreach($arr as $indice => $valor)
echo "Indice: $indice - Valor: $valor<br/>";

echo "<h1>Ejercicio 3</h1>";

$productos = array ("M"=>"MESA","S"=>"SILLA","F"=>"FLEXO","E"=>"ESTANTERIA"); 

echo "<h3>Recorrido del array mediante el uso de variables.</h3>"; 
echo "$productos[M]<br/>"; 
echo "$productos[S]<br/>"; 
echo "$productos[F]<br/>"; 
echo "$productos[E]<br/>"; 

echo "<h3>Recorrido del array mediante el uso del bucle while.</h3>"; 
while(list($clave,$valor)=each($productos)) 
 echo "Clave: $clave - Valor: $valor<br/>";

echo "<h3>Recorrido del array mediante el uso de foreach.</h3>";
foreach($productos as $clave => $valor) 
 echo "Clave: $clave - Valor: $valor<br \>\n";

echo "<h1>Ejercicio 4</h1>";

echo "<h3>array_keys</h3>";
$array = array_keys($productos);
while (list(,$valor)=each($array)) echo "$valor<br/>";


 echo "<h3>array_values</h3>";
$array = array_values($productos);
while (list(,$valor)=each($array)) echo "$valor<br/>";

 echo "<h3>in_array</h3>";
echo $boolean = in_array("SILLA",$productos);

 echo "<h3>range</h3>";
$array = range(5,10);
while (list(,$valor)=each($array)) echo "$valor<br/>";

 echo "<h3>array_reverse</h3>";
$array = array_reverse($productos);
while (list(,$valor)=each($array)) echo "$valor<br/>";
//Invierte un array. 

 echo "<h3>shuffle</h3>";
$boolean = shuffle($productos);
while (list(,$valor)=each($productos)) echo "$valor<br/>";
//Desordena un array. 
//Devuelve true si desordena el array y false en caso contrario. 

 echo "<h3>array_merge</h3>";
$array1 = array ("item1-1","item1-2","item1-3","item1-4");
$array2 = array ("item2-1","item2-2","item2-3","item2-4"); 
$array3 = array ("item3-1","item3-2","item3-3","item3-4"); 
$array = array_merge($array1, $array2,$array3);
while (list(,$valor)=each($array)) echo "$valor<br/>";

echo "<h1>Ejercicio 5</h1>";
 echo "<h3>array_pop</h3>";
$array5 = array ("item1-1","item1-2","item1-3","item1-4");
 echo $variable = array_pop($array5);
 
  echo "<h3>array_push</h3>";
  $añadir = "item nuevo";
 array_push($array5, $añadir);
while (list(,$valor)=each($array5)) echo "$valor<br/>";

echo "<h1>Ejercicio 6</h1>";
 echo "<h3>array_shift</h3>";
$array6 = array ("item1-1","item1-2","item1-3","item1-4");
echo $variable = array_shift($array6);

echo "<h3>Array_unshift</h3>";
  $añadir = "item nuevo";
 Array_unshift($array6, $añadir);
while (list(,$valor)=each($array6)) echo "$valor<br/>";
