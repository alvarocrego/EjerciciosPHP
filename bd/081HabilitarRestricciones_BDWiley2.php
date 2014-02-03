<?php
//connect to MySQL
require ('config.php');
$connect=mysql_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB)
or die('No se puedo conectar a MySql.' .mysql_error());

//make sure we're using the right database
mysql_select_db ("wiley2");

$set="SET FOREIGN_KEY_CHECKS=1";//habilitar las restricciones
mysql_query($set) or die(mysql_error());
echo "Se han activado las restricciones";echo"<br>";

?>
