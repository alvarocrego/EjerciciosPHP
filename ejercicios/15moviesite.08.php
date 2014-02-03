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
<?php
     echo "Welcome to our site, ";
     //delete this line: echo $_COOKIE['username'];
     echo $_SESSION['username'];
     echo "! <br>";
     echo "My favorite movie is ";
     echo $_REQUEST['favmovie'];
     echo "<br>";
     $movierate=5;
     echo "My movie rating for this movie is: ";
     echo $movierate;

?>
</BODY>
</HTML>
