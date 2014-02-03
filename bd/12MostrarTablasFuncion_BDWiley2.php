<?php
//connect to MySQL
require ('config.php');
$connect=mysql_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB)
or die('No se puedo conectar a MySql.' .mysql_error());


$results=mysql_query($_REQUEST['q']) or die(mysql_error());



MostrarTablas2($results);

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
