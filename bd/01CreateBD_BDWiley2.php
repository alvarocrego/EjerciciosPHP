<?php
//connect to MySQL; note we've used our own parameters- you should use
//your b for hostname, user, and password
require ('config.php');
$conn=mysql_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB)
  or die('No se puedo conectar a MySql.' .mysql_error());



//create the main database
$tab = "create database wiley2";
$x=mysql_query($tab)
 or die (mysql_error());
//make sure our recently created database is the active one
mysql_select_db ("wiley2");



echo "Wiley2 Database successfully created!";

?>
