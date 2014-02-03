<?php
session_start();
$_SESSION['username']="Joe12345";
$_SESSION['authuser']=1;
?>
<HTML>
<HEAD>
<TITLE>Find my Favorite Movie!</TITLE>
</HEAD>
<BODY>
<?php
     $myfavmovie=urlencode("Life of Brian");
     echo "<a href='10moviesite.06.php?favmovie=$myfavmovie'>";
     echo "Click here to see information about my favorite movie!";
     echo "</a>";
?>
</BODY>
</HTML>
