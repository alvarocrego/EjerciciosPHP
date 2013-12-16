<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function fn1($var2){
    echo "punto 1 dentro de la funcion, \$var2 = ".$var2;
    echo "<br/>";
    $var2 = "contenido2";
    echo "punto 2 dentro de la funcion, \$var2 = ".$var2;
    echo "<br/>";
    return $var2;
}
$var2 = "contenido1";
$var2 = fn1($var2);
echo "fuera de la funcion, \$var2 = ".$var2."<br/>";
