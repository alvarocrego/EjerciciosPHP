<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function crearArray($v = 5, $ind1, $ind2, $val1, $val2) {
    $array = array();
    for ($g = 0; count($array) < $v; $g++) {
        $array["X".rand($ind1, $ind2)] = rand($val1, $val2);
    }
    return $array;
}

function borrarArray($arr){
   $f = count($arr);
    for ($g = 0; $g < $f; $g++) {
    array_pop($arr);
    }
    echo "<p>Array Borrado</p>";
    return $arr;
}

 $arrCreado = crearArray(8,10,90,100,200);

while (list($indice,$valor)=each($arrCreado)) echo "$indice - $valor<br/>";

$arrCreado = borrarArray($arrCreado);

var_dump($arrCreado);