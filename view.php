<?php
   session_start();
   $con=mysqli_connect("localhost","root","","photo");

   $r=mysqli_query($con,"select * from register");

   echo"<table border='1' align='center' cellspacing=0 cellpadding=10>";
   echo"<tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Number</th>
        <th>OTP</th>
        </tr>";
        while($row=mysqli_fetch_array($r))
        {
          echo "<tr><td>",$row[0],"</td></tr>";
          echo "<tr><td>",$row[1],"</td></tr>";
          echo "<tr><td>",$row[2],"</td></tr>";
          echo "<tr><td>",$row[3],"</td></tr>";
          echo "<tr><td>",$row[4],"</td></tr>";
        }
?>
