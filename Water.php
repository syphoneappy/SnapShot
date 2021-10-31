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
    table{
      background:#0d0d0d;
      width:100%;
      height:100vh;
      margin-top:10;
    }
    #image{
      position:relative;
      width:100%;
      height:200px;
      margin:0px;
      border-top-left-radius:2px;
      border-top-right-radius:2px;
      padding-top:10px;
    }
    #image:hover{
      padding:10px;
    }
    td{
      margin:0px;
    }
    td a p{
      color:#0d0d0d;
    }
    td:hover{
      box-shadow: 4px 16px rbga(0.5,black);
    }
    .text{
      margin-top:4px;
      padding:2px;
      background:#fff;
      border-radius:10px;
    }
    .text:hover{
      background:#333;
      transition:0.3s;
      color:#fff;
      border-radius:10px;
      padding:1px;
    }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="jquery-ui-dark\jquery-ui.css">
    <link rel="stylesheet" href="jquery-ui-dark\jquery-ui.theme.css">
    <link rel="stylesheet" href="jquery-ui-dark\jquery-ui.structure.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-dark" style="background:#0d0d0d;">
            <a class="navbar-brand font-weight-bold" href="#" style="font-size:30px"><i class="material-icons">
    sentiment_satisfied_alt
    </i>      SnapShot</a>
        <h3 class="text-center font-weight-bold text-primary"><i class="material-icons">home</i>Home</h3>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="background:#0d0d0d; border:1px solid #fff; color:#fff;">
          <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" >Search</button>
        </form>
     </nav>
     <ul class="nav justify-content-center text-lg" style="background:#0d0d0d; padding-bottom:4px;">
        <a class="navbar-brand font-weight-bold float-left" href="#">
          <?php
        $con=mysqli_connect("localhost","root","","photo");
          $id=$_SESSION["idd"];
          $r=mysqli_query($con,"select UName from register where id='$id'");
          while ($row=mysqli_fetch_array($r))
          {
            echo "<a href='profile.php'><h4 class='text-light float-left'><i class='material-icons'>
        fingerprint
        </i>$row[0]</h4></a>";
          }
          ?>
    </a>
      <li class="nav-item">
      <a class="nav-link active" href="Welcome.php"><i class="material-icons">home</i>   Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Upload.php"><i class="material-icons">
    cloud_upload
    </i>  Upload</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Contact.php"><i class="material-icons">
    contacts
    </i>  Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="LogOut.php"><i class="material-icons">
    vpn_key
    </i>Logout</a>
      </li>
    </ul>
    <h1 class="display-2 text-center text-light" style="background:#0d0d0d; margin:0px">Water</h1>
    <table>
    <?php
    $con=mysqli_connect("localhost","root","","photo");
      $id=$_SESSION["idd"];
      $r=mysqli_query($con,"select category,pname,Title,id from add_gallary where category='Water'");
      $count=0;
      while($row=mysqli_fetch_array($r))
      {
        if($count%5==0)
        {
          echo "<tr>";
        }
        echo "<td>";
        echo "<div class='container'>";
        echo "<a href='next.php?b=$row[3]'><img src='gallary/$row[1]' id='image'></a>";
        echo "<div class='text'>";
        echo "<a href='text.php?a=$row[3]'><p class='display-4' style='text-align:center; font-size:20px;'>";
        echo "<b>";
        echo "$row[2]";
        echo "</b>";
        echo "</p></a>";
        echo "</div>";
        echo "</div>";
        echo "</td>";
        if($count%5==5)
        {
          echo "</tr>";
        }
          $count++;
      }
     ?>
    </table>
  </body>
</html>
