<?php
session_start();
$_SESSION['username']=$_POST['user'];
$_SESSION['userpass']=$_POST['pass'];
$_SESSION['authuser']=0;

//Check username and password information

     if (($_SESSION['username']== 'Joe') AND
           ($_SESSION['userpass']== '12345'))
     {
     $_SESSION['authuser']=1;
     }
     else
     {
     echo "Sorry, but you don't have permission to view this
           page, you loser!";
     exit();
     }
?>
<HTML>
<HEAD>
<TITLE>Find my Favorite Movie!</TITLE>
</HEAD>
<BODY>
<?php

$myfavmovie=urlencode("Life of Brian");
     echo "<a href='15moviesite.08.php?favmovie=$myfavmovie'>";
     echo "Click here to see information about my favorite movie!";
     echo "</a>";
?>
</BODY>
</HTML>