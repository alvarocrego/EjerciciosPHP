<?php
session_start();
//check to see if user has logged in with a valid password
     if ($_SESSION['authuser']!=1) {
     echo "Sorry, but you don't have permission to view this
             page, you loser!";
     exit();
     }
?>
<HTML>
<HEAD>
<TITLE>My Movie Site - <?php echo $_REQUEST['favmovie'] ?></TITLE>
</HEAD>
<BODY>
<?php include "header.php"; ?>
<?php
function listmovies_1()
{
     echo "1. Life of Brian<br>";
     echo "2. Stripes<br>";
     echo "3. Office Space<br>";
     echo "4. The Holy Grail<br>";
     echo "5. Matrix<br>";
}

function listmovies_2()
{
     echo "6. Terminator 2<br>";
     echo "7. Star Wars<br>";
     echo "8. Close Encounters of the Third Kind<br>";
     echo "9. Sixteen Candles<br>";
     echo "10. Caddyshack<br>";
}

if (ISSET($_REQUEST['favmovie'])) {
     echo "Welcome to our site, ";
     echo $_SESSION['username'];
     echo "! <br>";
     echo "My favorite movie is ";
     echo $_REQUEST['favmovie'];
     echo "<br>";
     $movierate=5;
     echo "My movie rating for this movie is: ";
     echo $movierate;
}
else {
     echo "My top ";
     echo $_REQUEST['movienum'];
     echo " movies are:";
     echo "<br>";

     listmovies_1();
     If ($_REQUEST['movienum'] == 10) listmovies_2();
}
?>
</BODY>
</HTML>