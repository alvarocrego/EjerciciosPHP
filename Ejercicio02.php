<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function nombreApellidos($apellidosYnombre){
    $nombre=substr(stristr($apellidosYnombre, ","), 1);
    $apellidos=substr(trim("$apellidosYnombre", $nombre ), 0, -1);
    $apellidos2 = explode(" ", $apellidos);
    
    echo "<p>El nombre es: ".trim($nombre)." cuya longitud es: ".strlen(trim($nombre))."</p>";
    
    $longitudApellidos = strlen(trim($apellidos2[1]))+strlen(trim($apellidos2[0]));
    
    echo "<p>Los apellidos son: ".$apellidos2[0]." ".$apellidos2[1]." cuya longitud es: ".$longitudApellidos."</p>";
    
    $longitud = strlen(trim($apellidos2[1]))+strlen(trim($apellidos2[0]))+strlen(trim($nombre));
    
    echo "<p>El nombre y los paellidos son: $nombre ".$apellidos2[0]." ".$apellidos2[1]." cuya longitud es: ".$longitud."</p>";
    $array = array($nombre." ".$apellidos2[0]." ".$apellidos2[1],$longitud);
    return $array;
}

function mostrarArray($arr){
   while (list($indice,$valor)=each($arr)) echo "$indice => $valor<br/>";
}


$arrayDeFuncion = nombreApellidos("Crego Tapia, Alvaro");

mostrarArray($arrayDeFuncion);

