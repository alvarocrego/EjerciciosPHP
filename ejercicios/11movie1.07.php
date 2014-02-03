<?php 
setcookie("username","Joe");//expira en 30 dias
session_start();
$_SESSION['authuser']=1;
?>
<HTML>
<HEAD>
<TITLE>Find my Favorite Movie!</TITLE>
</HEAD>
<BODY>
<?php
     $myfavmovie=urlencode("Life of Brian");
     echo "<a href='12moviesite.07.php?favmovie=$myfavmovie'>";
     echo "Click here to see information about my favorite movie!";
     echo "</a>";
?>
</BODY>
</HTML>