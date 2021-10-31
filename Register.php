<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="Register.css">
    <link rel="stylesheet" href="jquery-ui-dark\jquery-ui.css">
    <link rel="stylesheet" href="jquery-ui-dark\jquery-ui.theme.css">
    <link rel="stylesheet" href="jquery-ui-dark\jquery-ui.structure.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div>
      <video autoplay muted loop id="myVideo">
      <source src="video.mp4" type="video/mp4">
      </video>
    <div class="Container">
        <form class="" action="conn.php" method="post">
          <h2 >Register</h2>
           <input type="text" name="Uname" placeholder="User Name" value=""><br>
           <input type="password" name="psw" value="" placeholder="Password"><br>
            <input type="number" name="PhoneNo" value="" placeholder="Phone Number"><br>
            <input type="text" name="OTP" value="" placeholder="DOB" id="pickadate"><br>
            <input type="checkbox" name="" value="">
            <p id="Agree">By Registering you agree with terms and condition.<a class="text-primary">Check If Not!</a></p>
            <div class="Agree">
              <h1 class="display-4">What is not allowed?</h1>
              <p><b>Respect the hard work of our contributors and keep these restrictions in mind.</b></p>
              <p>✕ Identifiable people may not appear in a bad light or in a way that is offensive.</p>
<p>✕ Don't sell unaltered copies of a photo, e.g. don't sell it as a stock photo, poster, print or on a physical product without adding any value.</p>
              <p>✕ Don't imply endorsement of your product by people or brands on the image.</p>
              <p>✕ Don't redistribute or sell the photos on other stock photo or wallpaper platforms.</p>
              <p>✕ Don't Upload Photos with illigal To Be used Stated By your State laws.</p>
              <p class="text-danger"><b>✕ Uploading Unwanted things Can be panishable and SnapShot Does Not Take Any Responsiblity</b></p>
            </div>
            <input type="submit"  name="create" value="Submit" class="btn btn-lg btn-primary btn-block">
        </form>
     </div>
   </div>
   <script>
     $(document).ready(function(){
       $("#pickadate").datepicker({changeYear:true,showOtherMonths:true,minDate: new Date(1931,11,28),maxDate: new Date(2019,12,31),showButtonPanel:true});
     })
     $("#Agree").click(function(){
     $("#virticalMenu").menu({menus:"div"});
     $(".Agree").dialog({title:"Agreement",draggable:false,resizable:false,height:620,width:600,show:100,hide:2000,modal:true});
   })
   </script>
    <script src="jquery-3.4.1.js"></script>
    <script src="jquery-ui-dark/jquery-ui.js"></script>
  </body>
</html>
