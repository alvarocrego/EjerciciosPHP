<?php
//connect to MySQL
require ('config.php');
$connect=mysql_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB)
or die('No se puedo conectar a MySql.' .mysql_error());

//make sure we're using the right database
mysql_select_db ("wiley2");



$const="ALTER TABLE movie 
		ADD CONSTRAINT fk_movietype_movie FOREIGN KEY (movie_type) 
		REFERENCES movietype(movietype_id) 
		ON DELETE CASCADE,
		ADD CONSTRAINT fk_leadactor_movie FOREIGN KEY (movie_leadactor) 
		REFERENCES people(people_id) ON DELETE CASCADE,
		ADD CONSTRAINT fk_director_movie FOREIGN KEY (movie_director) 
		REFERENCES people(people_id) ON DELETE CASCADE";

// ON DELETE CASCADE
// ON UPDATE CASCADE
// ON DELETE SET NULL
// ON UPDATE SET NULL
// ON DELETE RESTRICT
// ON UPDATE RESTRICT
// ON DELETE NO ACTION
// ON UPDATE NO ACTION
// SHOW INNODB STATUS

$results = mysql_query($const) or die(mysql_error());
echo "Se han añadido la restricción de clave ajena de movie_type, movie_leadactor y movie_director";

?>
