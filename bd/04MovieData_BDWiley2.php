<?php
//connect to MySQL
require ('config.php');
$connect=mysql_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB)
 or die('No se puedo conectar a MySql.' .mysql_error());

//make sure we're using the right database
mysql_select_db ("wiley2");

//insert data into "movietype" table
$type="INSERT INTO movietype (movietype_label)
      VALUES ('Sci Fi'),
     ('Drama'),
     ('Adventure'),
     ('War'),
     ('Comedy'),
     ('Horror'),
     ('Action'),
     ('Kids')" ;
$results=mysql_query($type)
or die(mysql_error());

//insert data into "people" table
$people="INSERT INTO people
         (people_fullname, people_isactor, people_isdirector)
      VALUES ('Jim Carrey', 1, 0),
     ('Tom Shadyac', 0, 1),
     ('Lawrence Kasdan', 0, 1),
     ('Kevin Kline', 1, 0),
     ('Ron Livingston', 1, 0),
     ('Mike Judge', 0, 1)";
$results=mysql_query($people)
or die(mysql_error());

//insert data into "movie" table
$insert="INSERT INTO movie (movie_name, movie_type, movie_year,
     movie_leadactor, movie_director)
      VALUES ('Bruce Almighty', 5, 2003, 1, 2),
     ('Office Space', 5, 1999, 5, 6),
     ('Grand Canyon', 2, 1991, 4, 3)";
$results = mysql_query($insert)
     or die(mysql_error());






echo "Data inserted successfully!";
?>