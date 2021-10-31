<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
     html,body{
       background:url(woman-wearing-white-dress-shirt-while-holding-red-balloon-3526416.jpg) ;
       height:100%;
       background-position: center;
background-repeat: no-repeat;
background-size: cover;
     }
     div{
       width:500px;
       height:400px;
       position:absolute;
       top:20%;
       left:15%;
     }
     button{
       width:100%;
     }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  </head>
  <body>
  <div class="">
    <h1 class="display-4 text-light">Your Photo Is been uploaded..<br>Go Back To Home Page</h1>
    <a href="Welcome.php"><button class="btn btn-lg btn-danger" type="button" name="button">Home</button></a>
  </div>
  </body>
</html>

<?php
session_start();
$con = mysqli_connect("localhost","root","","photo");
$r=move_uploaded_file($_FILES["aa"]["tmp_name"],"gallary/".$_FILES["aa"]["name"]);
$id=$_SESSION["idd"];
$pname=$_FILES["aa"]["name"];
$category=$_POST["cate"];
$title=$_POST["title"];
$comment=mysqli_real_escape_string($con,$_POST["comment"]);
$r = mysqli_query($con,"insert into add_gallary (category,pname,title,uid,comment) values ('$category','$pname','$title','$id','$comment')");
    if($r)
      echo "";
    else
echo mysqli_error($con);
?>
