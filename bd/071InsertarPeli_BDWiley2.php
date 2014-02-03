<?php
//connect to MySQL
require ('config.php');
$connect=mysql_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB)
or die('No se puedo conectar a MySql.' .mysql_error());
mysql_select_db ("wiley2");

$people="INSERT INTO wiley2.people
         (people_fullname, people_isactor, people_isdirector) VALUES
	     ('Hugh Jackman', 1, 0),
         ('Tom Hooper', 0, 1)";

$results=mysql_query($people) or die(mysql_error());
echo "Se ha insertado el actor principal y director";echo"<br>";

$insert="INSERT INTO wiley2.movie
		(movie_name, movie_type, movie_year,movie_leadactor, movie_director) VALUES
	    ('Los miserables', 9, 2012, 11, 12)";

$results2 = mysql_query($insert) or die(mysql_error());;
echo "Se ha insertado nueva película del actor principal y director insertados anteriormente";echo"<br>";



?>