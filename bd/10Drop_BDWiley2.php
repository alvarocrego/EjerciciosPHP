<?php
//connect to MySQL
require ('config.php');
$connect=mysql_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB)
or die('No se puedo conectar a MySql.' .mysql_error());


//drop the main database
$tab = "drop database wiley2";
$x=mysql_query($tab) or die (mysql_error());

echo "La base de datos wiley2 borrada";
?>
