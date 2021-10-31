<?php
session_start();
$con = mysqli_connect("localhost","root","","photo");
$output = '';
if (isset($_POST['search'])) {
  $searchq = $_POST['search'];
  $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
  $query = mysqli_query("Select title From add_gallary Where title LIKE '%$searchq%'") or die("Could not Search");
  $count = mysql_num_rows($query);
  if ($count == 0) {
    $output = 'There was No Search result!';
  }
  else {
    while ($row = mysqli_fetch_array($query)) {
      $title = $row['Title'];
      $id = $row['id'];
      $output .= '<div> '.$title.'</div>';
    }
  }
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      html{
        background:black;
      }
      div{
        color:#fff;
      }
    </style>
  </head>
  <body>
    <?php
    echo "$output";
     ?>

  </body>
</html>
