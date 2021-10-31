<?php
    $username = $_POST["Uname"];
    $pass = $_POST["psw"];
    $No = $_POST["PhoneNo"];
    $OTP = $_POST["OTP"];
    $con = mysqli_connect("localhost","root","","photo");
    $r = mysqli_query($con,"insert into register (UName,password,PhoneNo,OTP) values ('$username','$pass','$No','$OTP')");
    if($r)
      echo "<h1>You are Been Register..Login To Continue  </h1>";
    else
      echo "<h1>Not Inserted</h1>";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
       html{
         background:#0d0d0d;
         color:#fff;
       }
       body{
         margin:0;
         background:url(unsplash01.jpg);
         height:100%;
         background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
       }
       h1{
         text-align:center;
         position: absolute;
         top:20%;
         left:30%;
       }
       p{
         font-family:Segoe UI Black;
         font-size:32px;
         text-align: center;
         color:#7e32c5;
         margin:10px;
       }
       #one{
         padding:20px;
         background:#fff;
         color:#0d0d0d;
         border:#0d0d0d;
            margin-left:210px;
         border-radius:5px;
       }
       #two{
         padding:20px;
         background:#fff;
         color:#0d0d0d;
         border:#0d0d0d;
           margin-left:180px;
         border-radius:5px;
       }
       div{
         width:500px;
         height:400px;
         position:absolute;
         top:30%;
         left:30%;
         translate:(-50%,-50%);
       }
       #one:hover{
         background:purple;
         color:white;
         transition:0.3s;
         border-radius:15px;
       }
       #two:hover{
         background:purple;
         color:white;
         transition:0.3s;
         border-radius:15px;
       }
    </style>
  </head>
  <body>
    <div class="">
      <a href="LogIn.php"><button id="one">Login</button></a>
      <br><p>Or</p><br>
      <a href="Homes.php"><button id="two">Go To Home Page</button></a>
    </div>
  </body>
</html>
