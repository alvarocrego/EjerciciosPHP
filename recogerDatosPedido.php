<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if($_REQUEST['cif'] != ""){
    echo "<p>El CIF es ".strip_tags($_REQUEST[cif])."</p>";
} else {
    echo "<p>No se a espeficicado el CIF</p>";
}

if($_REQUEST['empresa'] != ""){
    echo "<p>La Empresa es ".strip_tags($_REQUEST[empresa])."</p>";
} else {
    echo "<p>No se a espeficicado la Empresa</p>";
}

if($_REQUEST['contacto'] != ""){
    echo "<p>El Contacto es ".strip_tags($_REQUEST[contacto])."</p>";
} else {
    echo "<p>No se a espeficicado el Contacto</p>";
}

if($_REQUEST['email'] != ""){
    echo "<p>El E-mail es ".strip_tags($_REQUEST[email])."</p>";
} else {
    echo "<p>No se a espeficicado el E-mail</p>";
}

if($_REQUEST['contrasenya'] != ""){
    echo "<p>La Contraseña es ".strip_tags($_REQUEST[contrasenya])."</p>";
} else {
    echo "<p>No se a espeficicado la Contraseña</p>";
}

if($_REQUEST['descripcion'] != ""){
    echo "<p>La Descripcion es ".strip_tags($_REQUEST[descripcion])."</p>";
} else {
    echo "<p>No se a espeficicado la Descripcion</p>";
}

if($_FILES['pedido'] != null){
    
    print_r($_FILES['pedido']);
} else {
    echo "<p>No se a espeficicado el Pedido</p>";
}

if($_REQUEST['clientePreferente'] == TRUE){
    echo "<p>Es Cliente Preferente</p>";
} else {
    echo "<p>No es Cliente Preferente</p>";
}

if($_REQUEST['cantidad'] != ""){
    echo "<p>La Cantidad es ".strip_tags($_REQUEST[cantidad])."</p>";
} else {
    echo "<p>No se a espeficicado la Cantidad</p>";
}

if($_REQUEST['impuestos'] != null){
    echo "<p>Los Impuestos son del $_REQUEST[impuestos]%</p>";
} else {
    echo "<p>No se a espeficicado Impuestos</p>";
}

if($_REQUEST['promocion'] != null){
    echo "<p>La Promocion es: $_REQUEST[promocion]</p>";
} else {
    echo "<p>No se a espeficicado la Promocion</p>";
}














