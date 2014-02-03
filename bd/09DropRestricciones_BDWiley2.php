<?php
//connect to MySQL
require ('config.php');
$connect=mysql_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB)
or die('No se puedo conectar a MySql.' .mysql_error());

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

$s="show create table wiley2.movie";
$results = mysql_query($s) or die(mysql_error());
MostrarTablas2($results);



$drop="ALTER TABLE wiley2.movie 
		DROP FOREIGN KEY fk_movietype_movie,
		DROP FOREIGN KEY fk_leadactor_movie,
		DROP FOREIGN KEY fk_director_movie"; 
		
mysql_query($drop) or die(mysql_error());


$s2="show create table wiley2.movie";
$results2 = mysql_query($s2) or die(mysql_error());
MostrarTablas2($results2);

?>