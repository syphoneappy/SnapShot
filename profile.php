<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
       html{
         background:#0d0d0d;
       }
       p{
         color:#999;
       }
       table{
        position:absolute;
        top:0%;
        left:0%;
        transition:translate(-50%,-50%);
        width:100%;
        height:100vh;
        background:#0d0d0d;
        color:#fff;
        text-align:center;
      }

    </style>
  </head>
  <body>
    <table>
      <?php
      $con=mysqli_connect("localhost","root","","photo");
      $id=$_SESSION["idd"];
      $r=mysqli_query($con,"select UName,PhoneNo,OTP from register where id='$id'");
      while($row=mysqli_fetch_array($r))
      {
         echo "<tr>";
         echo "<td>";
         echo "<h1>USERID<p>$row[0]</p></h1>";
         echo "<h1>Contact No<p>$row[1]</p></h1>";
         echo "<h1>Date Of Birth<p>$row[2]</p></h1>";
         echo "</td>";
         echo "</tr>";
      }
     ?>
    </table>
  </body>
</html>
