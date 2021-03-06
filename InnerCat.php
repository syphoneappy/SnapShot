<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <style media="screen">
    img{
      width:100%;
      height:87vh;
    }
    .head{
      height:13vh;
      background:#0d0d0d;
    }
    .trans{
       background:rgba(2, 2, 2, 0.8);
    }
  </style>
</head>
<body>
  <div class="head">
    <h1 class="display-4 text-light text-center">Choose A Category</h1>
  </div>
  </header>
  <div id="carouselExampleControls" class="carousel slide size" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="HomePageImage\bread-food-brunch-lunch-3326103.jpg" alt="">
      <div class="carousel-caption d-none d-md-block trans">
        <h5 class="display-1 text-light">Food</h5>
       <?php
       echo "<a href='LogIn.php'><p>Click Here To See Picture</p></a>";
       ?>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src=HomePageImage\hands-above-water-3353994.jpg alt="Second slide">
      <div class="carousel-caption d-none d-md-block trans">
        <h5 class="display-1 text-danger">Water</h5>
        <?php
        echo "<a href='LogIn.php'><p>Click Here To See Picture</p></a>";
        ?>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="HomePageImage\shallow-focus-photography-of-woman-beside-fence-1684915.jpg" alt="">
      <div class="carousel-caption d-none d-md-block trans">
        <h5 class="display-1 text-warning">Beach</h5>
        <?php
        echo "<a href='LogIn.php'><p>Click Here To See Picture</p></a>";
        ?>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
