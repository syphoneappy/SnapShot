<?php
 session_start();
 $username=$_POST["un"];
 $pass=$_POST["psw"];
 if (isset($_SESSION['un']) && $_SESSION['psw']== true) {
   // code...
   header("Location:Welcome.php");
 }
 if(isset($_POST['un']) && isset($_POST['psw'] == $pass)) {
   // code...
    $_SESSION['loggedin'] = true;
    header("Location:Welcome.php");
 }
 ?>
