<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style media="screen">
    html,body{
      margin:0;
      background:#0d0d0d;
    }
    img{
    width:100%;
    height:100vh;
    background:url() no-repeat 50% 50%;
    background-size:cover;
    margin-bottom:0px;
  }
  .justify-center{
    margin:0px;
    width:100%;
    border-radius:0px;
  }
  .back{
    display:flex;
    justify-content:center;
    margin:0px;
  }
    </style>
  </head>
</html>
<?php
session_start();
$con=mysqli_connect("localhost","root","","photo");

  $id=$_REQUEST["b"];

  $r=mysqli_query($con,"select pname from add_gallary where id='$id'");

  while ($row=mysqli_fetch_array($r)) {
        echo "<img src='gallary/$row[0]' width=180 height=150>";
        echo "<a class='btn btn-primary btn-lg justify-center' href='gallary/$row[0] ' download>Download</a>";
        echo "<br><br>";
        echo "<a class='back' href='Welcome.php'>Back To Previous page</a>";
  }
?>
