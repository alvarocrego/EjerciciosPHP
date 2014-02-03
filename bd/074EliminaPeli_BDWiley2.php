<?php
//connect to MySQL
require ('config.php');
$connect=mysql_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB)
or die('No se puedo conectar a MySql.' .mysql_error());
mysql_select_db ("wiley2");

$d="delete from wiley2.movie where movie_name='Los miserables'";echo"<br>";
$results4 = mysql_query($d) or die(mysql_error());
echo "Se ha eliminado la película creada anteriormente";echo"<br>";


?>