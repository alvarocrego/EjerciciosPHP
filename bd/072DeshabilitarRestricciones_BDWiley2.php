<?php
//connect to MySQL
require ('config.php');
$connect=mysql_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB)
or die('No se puedo conectar a MySql.' .mysql_error());

mysql_select_db ("wiley2");


$set="SET FOREIGN_KEY_CHECKS=0";//deshabilitar las restricciones
mysql_query($set) or die(mysql_error());
echo "Se han deshabilitado las restricciones";echo"<br>";

?>