<HTML>
<HEAD>
<TITLE>My Movie Site - <?php echo $favmovie ?></TITLE>
</HEAD>
<BODY>
<?php
     //delete this line: define ("FAVMOVIE", "The Life of Brian");
     echo "My favorite movie is ";
     echo $favmovie;
     echo "<br>";
     $movierate=5;
     echo "My movie rating for this movie is: ";
     echo $movierate;
?>
</BODY>
</HTML>
