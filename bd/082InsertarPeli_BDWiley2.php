<?php
//connect to MySQL
require ('config.php');
$connect=mysql_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB)
or die('No se puedo conectar a MySql.' .mysql_error());

//make sure we're using the right database
mysql_select_db ("wiley2");

$insert="INSERT INTO wiley2.movie
		(movie_name, movie_type, movie_year,movie_leadactor, movie_director) VALUES
	    ('Los miserables', 2, 2012, 11, 12)";

$results2 = mysql_query($insert) or die(mysql_error());
echo "Se ha insertado nueva película del actor principal y director insertados anteriormente";echo"<br>";


?>
