<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Atomic+Age&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
      <style media="screen">
        html,body{
          font-family: 'Atomic Age', cursive;
          background:#0d0d0d;
        }
        body{
          margin:0;
          padding:0;
          width:100%;
        }
        img{
          width:100%;
          height:100vh;
          background:url() no-repeat 50% 50%;
          background-size:cover;
          margin-bottom:10px;
        }
        p{
           text-indent: 50px;
         text-align: justify;
        letter-spacing: 3px;

        }
        .foots{
          float:right;
          margin-right:20px;
        }
        .justify-center{
          display:flex;
          justify-content:center;
          align-items:center;
          border-radius:0px;
        }
      </style>
    <title></title>
  </head>
  <body>  <nav class="navbar navbar-dark" style="background:#0d0d0d;">
        <a class="navbar-brand font-weight-bold" href="#" style="font-size:30px"><i class="material-icons">
sentiment_satisfied_alt
</i>      SnapShot</a>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="background:#0d0d0d; border:1px solid #fff; color:#fff;">
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" >Search</button>
    </form>

 </nav>

          <?php
          $con=mysqli_connect("localhost","root","","photo");
            $id=$_REQUEST["a"];
            $r=mysqli_query($con,"select pname,title,comment from add_gallary where id='$id'");
            while ($row=mysqli_fetch_array($r)) {
              // code...
                  echo "<div class='header'><img src='gallary/$row[0]' width=180 height=150></div>";
                  echo "<h1 class='text-center text-primary' style='margin-top:5px'>$row[1]<br/></h1><hr>";
                  echo "<p class='text-light' style='margin-left:9px;margin-right:9px;'>$row[2]</p>";
                  echo "<a class='btn btn-lg btn-primary justify-center' href='gallary/$row[0] ' download>Download
                  </a>";
                  echo "<br><br>";
                  echo "<a class='foots' href='Welcome.php'>Back To Previous page</a>";
            }
          ?>

  </body>
</html>
