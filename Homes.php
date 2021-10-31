<!DOCTYPE html>
<html>
<style>
* {
  box-sizing: border-box;
  background:#0d0d0d;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
  color:#fff;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}
.Login{
  width:95%;
  height:50px;
  position:absolute;
  background:;
    text-align: center;
    display:flex;
    justify-content:center;
    align-items:center;
}

.Login a{
  font-size:20px;
  color:#fff;
  text-decoration:none;
}
.Login a:hover{
  color:blue;
}
.Lg{
   float:right;
   margin:4px;
}
/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
</style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"      rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<body>

<!-- Header -->
<div class="header">
  <h1><i class="material-icons">
sentiment_satisfied_alt
</i>SnapShot</h1><a href="LogIn.php"><button type="button" name="button" class="btn btn-dark btn-md">LogIn</button>
</a></div>

<!-- Photo Grid -->
<div class="row">
  <div class="column">
    <img src="HomePageImage/black-and-white-feather-2822949.jpg" style="width:100%">
    <img src="HomePageImage/bread-food-brunch-lunch-3326103.jpg" style="width:100%">
    <img src="HomePageImage/black-and-white-feather-2822949.jpg" style="width:100%">
    <img src="HomePageImage/bread-food-brunch-lunch-3326103.jpg" style="width:100%">
    <img src="HomePageImage/black-and-white-feather-2822949.jpg" style="width:100%">
    <img src="HomePageImage/city-dawn-sunset-skyline-3337210.jpg" style="width:100%">
    <img src="HomePageImage/black-and-white-feather-2822949.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="HomePageImage/bread-food-brunch-lunch-3326103.jpg" style="width:100%">
    <img src="HomePageImage/black-and-white-feather-2822949.jpg" style="width:100%">
    <img src="HomePageImage/city-dawn-sunset-skyline-3337210.jpg" style="width:100%">
    <img src="HomePageImage/black-and-white-feather-2822949.jpg" style="width:100%">
    <img src="HomePageImage/bread-food-brunch-lunch-3326103.jpg" style="width:100%">
    <img src="HomePageImage/black-and-white-feather-2822949.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="HomePageImage/curve-design-futuristic-lines-911738.jpg" style="width:100%">
    <img src="HomePageImage/shallow-focus-photography-of-woman-beside-fence-1684915.jpg" style="width:100%">
    <img src="HomePageImage/woman-sitting-in-wall-hole-3351676.jpg" style="width:100%">
    <img src="HomePageImage/curve-design-futuristic-lines-911738.jpg" style="width:100%">
    <img src="HomePageImage/photo-of-woman-sitting-on-rock-3326363.jpg" style="width:100%">
    <img src="HomePageImage/man-lying-on-floor-3171834.jpg" style="width:100%">
    <img src="HomePageImage/curve-design-futuristic-lines-911738.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="HomePageImage/curve-design-futuristic-lines-911738.jpg" style="width:100%">
    <img src="HomePageImage/hands-above-water-3353994.jpg" style="width:100%">
    <img src="HomePageImage/photo-of-woman-sitting-on-rock-3326363.jpg" style="width:100%">
    <img src="HomePageImage/hands-above-water-3353994.jpg" style="width:100%">
    <img src="HomePageImage/man-lying-on-floor-3171834.jpg" style="width:100%">
    <img src="HomePageImage/curve-design-futuristic-lines-911738.jpg" style="width:100%">
  </div>
  <div class="column">
    <div class="Login">
        <a href="LogIn.php">Login To View More</a>
    </div>
  </div>
</div>
</body>
</html>
