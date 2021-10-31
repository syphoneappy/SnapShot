<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="Register.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style>
p{
  font-style:oblique;
  font-size:20px;
  font-family:Agency fb;
  margin-top:10px;
}
</style>
  </head>
  <body>
    <div>
      <video autoplay muted loop id="myVideo">
      <source src="video.mp4" type="video/mp4">
      </video>


    <div class="Container">
        <form class="" action="login1.php" method="post">
          <h2 >Log In</h2>
           <input type="text" name="un" placeholder="User Name" value=""><br>
           <input type="password" name="psw" value="" placeholder="Password"><br>

            <input type="submit"  name="create" value="LogIn" class="btn btn-lg btn-light btn-block" onclick="login1.php">
            <p class="text-center">Or</p>
            <a href="Register.php"><h1 class="btn btn-lg btn-block btn-dark">Register</h1></a>
        </form>
     </div>
   </div>
  </body>
</html>
