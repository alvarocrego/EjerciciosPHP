<?php
//connect to MySQL
require ('config.php');
$connect=mysql_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB)
or die('No se puedo conectar a MySql.' .mysql_error());
mysql_select_db ("wiley2");



$set="SET FOREIGN_KEY_CHECKS=0";//desactivar restricciones
mysql_query($set) or die(mysql_error());
echo "Se han desactivado las restricciones";echo"<br>";

$insert="INSERT INTO wiley2.movie
		(movie_name, movie_type, movie_year,movie_leadactor, movie_director) VALUES
	    ('Los miserables', 9, 2012, 11, 12)";
$results3 = mysql_query($insert) or die(mysql_error());
echo "Se ha insertado la película con el tipo de película inexistente";echo"<br>";
?>