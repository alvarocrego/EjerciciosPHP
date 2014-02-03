<?php
//connect to MySQL
require ('config.php');
$connect=mysql_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB)
or die('No se puedo conectar a MySql.' .mysql_error());

//make sure we're using the right database
mysql_select_db ("wiley2");

//insert people
$people="INSERT INTO people
         (people_fullname, people_isactor, people_isdirector) VALUES 
	     ('Naomi Watts', 1, 0),
         ('Juan Antonio Bayona', 0, 1),
         ('Aida Folch', 1, 0),
         ('Fernando Trueba', 0, 1)";
 
$results=mysql_query($people) or die(mysql_error());

//insert data into "movie" table
$insert="INSERT INTO movie 
		(movie_name, movie_type, movie_year,movie_leadactor, movie_director) VALUES 
	    ('Lo imposible', 2, 2012, 7, 8),
        ('El artista y la modelo', 2, 2012, 9, 10)";

$results = mysql_query($insert) or die(mysql_error());
echo "Se han insertado 2 nuevas películas, junto con sus directores y actores principales";

