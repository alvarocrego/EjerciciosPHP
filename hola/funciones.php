<?php

echo "<h1>Las preguntas que con de desarrollo estan en un comentario en este fichero.</h1>";

function mi_funcion()
{
	echo "Mi función ha sido invocada"; //instrucciones
	return 5;
}
mi_funcion();

/* 
 * 
 * en realidad la funcion no devuleve nada, el echo que hay dentro de la funcion lo que hace es imprimir en la pantalla.
 * 
 * */

function create_table($data)
{
	echo "<table border = 1>";
	reset($data);
	$value = current($data);
	while ($value){
		echo "<tr><td>$value</td></tr>\n";
		$value = next($data);
	}
	echo "</table>";
}

$mi_array = array ("Linea uno","Linea dos","Linea tres");
create_table($mi_array);
echo"<br>";echo"<br>";

/*
 * Ejercicio 2: Explicar que hace la función reset, current y next
 * sobre arrays.
 * Poner algún otro ejemplo.
 * ¿Qué es el paso de parámetros por Valor?
 * 
 * reset() rebobina el puntero interno de un array al primer elemento y devuelve el valor del primer elemento del array.
 * current() Cada array tiene un puntero interno a su elemento "actual", que es iniciado desde el primer elemento insertado en el array.
 * next() se comporta como current(), con una diferencia. Avanza el puntero interno un lugar a delante antes de devolver el valor del elemento.
 * Esto significa que devuelve el siguiente valor del array y avanza el puntero interno del array un lugar.
 * 
 *  */
echo "<h1>Ejemplo Ejercicio 2</h1>";
function ejemplo1($ejem){
	echo current($ejem) . "<br>";
	echo next($ejem) . "<br>";
	echo reset($ejem). "<br>";
	echo next($ejem) . "<br>";
	echo next($ejem) . "<br>";
	echo current($ejem) . "<br>";
}
$mi_array2 = array ("1","2","3","4","5");
ejemplo1($mi_array2);

/* 
 * 
 * ¿que es el paso de parametros por valor?
 * quiere decir que el cambio de un dato de un parámetro no actualiza el dato de la variable que se pasó a la función
 * 
 * */

/*
 * Ejercicio 03
 * El paso de parametros por referencia.
 * El cambio del valor de un parámetro dentro de una función sí afecta al valor de la variable original, sin embargo
 * por valor no cambia el valor de la variable original.
 */

/*
 * Ejercicio 04
 */

echo "<h1>Ejercicio 04</h1>";

function factorial($numero){
	$strResultado = "Obtener Factorial(".$numero.")=".$numero;
	$resultado = $numero;
	for ($i=$numero-1;$i>0;$i--){
		$strResultado .= "*".$i;
		$resultado *= $i;
	}
	$strResultado .= "=".$resultado;
	return $strResultado;
}

echo factorial(5)."<br>";

echo factorial(7)."<br>";

/*
 * Ejercicio 05
 */
echo "<h1>Ejercicio 05</h1>";

function showtitles()
{for($i=0;$i<func_num_args();$i++)
	echo (func_get_arg($i) . "<br/>\n");
}

showtitles('Titulo1');
showtitles('Titulo1', 'Titulo2');
showtitles('Titulo1', 'Titulo2', 'Titulo3');

/*
 * func_num_args() Obtiene el número de argumentos pasados a la función.
 * func_get_arg() Obtiene el argumento especificado de una lista de argumentos de una función definida por el usuario.
 * 
 */
?>