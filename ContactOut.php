<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      #myVideo {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        z-index:-2;
      }
      .Con{
        position: fixed;
        top:15%;
        left:15%;
        transition:translate(-50%,-50%;);
        background: rgba(0, 0, 0, 0.7);
        color: #f1f1f1;
        width: 30%;
        height:70vh;
        padding: 20px;
        z-index:-1;
        border-radius:5px;
        margin:0px;
      }
      .Heading{
        height:15%;
        width:100%;
        margin:0px;
        background:#fff;
        color:#0d0d0d;
        border-radius:5px;
      }
      #Map{
        z-index:1;
      }
      center{
        position:absolute;
        top:15%;
        left:50%;
        transition:translate(-50%,-50%);
      }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  </head>
  <body>

<video autoplay muted loop id="myVideo">
<source src="video (1).mp4" type="video/mp4">
</video>
    <div class="Con">
        <div class="Heading"><p class="text-center" style="font-size:32px">Contact Us</p></div>
        <div class="Data">
            <br> <br> <h4>harshtripathi669@gmail.com</h4><br>
            <h4>devameta32@gmail.com</h4><br>
            <h4>hiteshmulchandani2580@gmail.com</h4>

        </div>
    </div>

    <center>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7255.086631463915!2d73.708075797486!3d24.604952275811783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3967e5a6a0d7d3e5%3A0x1f3062412298e78!2sShobhagpura%2C%20Udaipur%2C%20Rajasthan%20313001!5e0!3m2!1sen!2sin!4v1576824917830!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </center>
  </body>
</html>
