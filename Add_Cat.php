<?php
session_start();
$Category=$_POST["Cat"];
$con=mysqli_connect("localhost","root","","photo");
$r=mysqli_query($con,"insert into add_category(Cat_Name)
values('$Category')");

if($r)
header("location:Admin_cat.php");
