<?php
//connect to MySQL
require ('config.php');
$connect=mysql_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB)
or die('No se puedo conectar a MySql.' .mysql_error());

//make sure we're using the right database
//mysql_select_db ("wiley");
$query="SELECT *
     FROM wiley2.movie
     ORDER BY movie_id";
$results=mysql_query($query) or die(mysql_error());


$query2="SELECT *
     FROM wiley2.movietype
     ORDER BY movietype_id";
$results2=mysql_query($query2) or die(mysql_error());

$query3="SELECT *
     FROM wiley2.people
     ORDER BY people_id";
$results3=mysql_query($query3) or die(mysql_error());


MostrarTablas2($results);
MostrarTablas2($results2);
MostrarTablas2($results3);

function MostrarTablas2($z){
	echo "<table border='1'>\n";
	while ($rows=mysql_fetch_assoc($z)) {
		echo "<tr>\n";
		foreach($rows as $value) {
			echo "<td>\n";
			echo $value;
			echo "</td>\n";
		}
		echo "</tr><br>\n";
	}
	echo "</table>\n";
};
?>