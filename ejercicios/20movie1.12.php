<?php
//delete this line: setcookie('username', 'Joe', time()+60);
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
<?php include "header.php"; ?>
<?php
     $myfavmovie=urlencode("Life of Brian");
     echo "<a href='21moviesite.12.php?favmovie=$myfavmovie'>";
     echo "Click here to see information about my favorite movie!";
     echo "</a>";
     echo "<br>";
     echo "<a href='21moviesite.12.php?movienum=5'>";
     echo "Click here to see my top 5 movies.";
     echo "</a>";
     echo "<br>";
     echo "<a href='21moviesite.12.php?movienum=10'>";
     echo "Click here to see my top 10 movies.";
     echo "</a>";
?>
</BODY>
</HTML>