<HTML>
<HEAD>
<TITLE>My Movie Site - <?php echo $_REQUEST['favmovie']  ?></TITLE>
</HEAD>
<BODY>
<?php
     echo "My favorite movie is ";
     echo $_REQUEST['favmovie'];
     echo "<br>";
     $movierate=5;
     echo "My movie rating for this movie is: ";
     echo $movierate;
?>
</BODY>
</HTML>
