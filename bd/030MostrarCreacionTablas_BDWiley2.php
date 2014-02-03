<?php
//connect to MySQL
require ('config.php');
$connect=mysql_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB)
or die('No se puedo conectar a MySql.' .mysql_error());

//make sure we're using the right database
//mysql_select_db ("wiley");

$s="show create table wiley2.movie";
$results = mysql_query($s) or die(mysql_error());

echo "<table border='1'>\n";
while ($rows=mysql_fetch_assoc($results)) {
	echo "<tr>\n";
	foreach($rows as $value) {
		echo "<td>\n";
		echo $value;
		echo "</td>\n";
	}
	echo "</tr><br>\n";
}
echo "</table>\n";
?>