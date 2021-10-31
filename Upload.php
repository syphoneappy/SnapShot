<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="Upload.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div >
      <video autoplay muted loop id="myVideo">
      <source src="Pexels Videos 1776352.mp4" type="video/mp4">
      </video>
    <nav class="navbar navbar-dark" style="background:#0d0d0d;">
        <a class="navbar-brand font-weight-bold" href="#" style="font-size:30px"><i class="material-icons">
sentiment_satisfied_alt
</i>SnapShot</a>
    <h3 class="text-center font-weight-bold text-primary"><i class="material-icons">
cloud_upload
</i>      Upload </h3>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="background:#0d0d0d; border:1px solid #fff; color:#fff;">
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" >Search</button>
    </form>
 </nav>
  </nav>
  <ul class="nav justify-content-center text-lg" style="background:#0d0d0d">
   <li class="nav-item">
   <a class="nav-link active" href="Welcome.php"><i class="material-icons">home</i>   Home</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="#"><i class="material-icons">
 fingerprint
 </i>Profile</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="Upload.php"><i class="material-icons">
 cloud_upload
 </i>  Upload</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="#"><i class="material-icons">
 contacts
 </i>Contact Us</a>
   </li>
   <li class="nav-item">
     <a class="nav-link disabled" href="LogOut.php"><i class="material-icons">
 vpn_key
 </i>Logout</a>
   </li>
 </ul>
     <div style="width:500px;margin:auto">
       <div class="Container">
         <form class=""  action="UpPhoto.php"
         enctype="multipart/form-data" method="post">
                  <select name="cate">
                  <option value="">Select Category</option>
                      <?php
$con=mysqli_connect("localhost","root","","photo");
                        $r=mysqli_query($con,"select * from add_category");
                        while($row=mysqli_fetch_array($r))
                        echo "<option value='$row[1]'>$row[1]
                        </option>";
                       ?>
                </select>
                <br>
                <input type="file" name="aa" value="Upload" class="btn btn-lg file">
                <br> <br>
                 <input type="text" name="title" value="" placeholder="Enter Title">
                <br>
                <textarea name="comment" rows="10" cols="80" placeholder="Enter An Caption"></textarea>
              <br/>  
              <input type="submit" name="sub" value="Add Photo" class="btn btn-lg btn-warning">
             </div>
         </form>
     </div>
   </div>
  </body>
</html>
