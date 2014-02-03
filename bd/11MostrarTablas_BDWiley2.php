<?php
//connect to MySQL
require ('config.php');
$connect=mysql_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB)
or die('No se puedo conectar a MySql.' .mysql_error());

$query="SELECT *
     FROM wiley2.movie
     ORDER BY movie_id";

echo "<a href='12MostrarTablasFuncion_BDWiley2.php?q=$query'>";
echo "Mostrar los datos de la tabla movie";
echo "</a>";echo"<br>";

$query2="SELECT *
     FROM wiley2.movietype
     ORDER BY movietype_id";

echo "<a href='12MostrarTablasFuncion_BDWiley2.php?q=$query2'>";
echo "Mostrar los datos de la tabla movietype";
echo "</a>";echo"<br>";



$query3="SELECT *
     FROM wiley2.people
     ORDER BY people_id";

echo "<a href='12MostrarTablasFuncion_BDWiley2.php?q=$query3'>";
echo "Mostrar los datos de la tabla people";
echo "</a>";echo"<br>";


?>