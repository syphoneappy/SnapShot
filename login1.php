<?php
session_start();
$username=$_POST["un"];
$pass=$_POST["psw"];

$con=mysqli_connect("localhost","root","","photo");
$r=mysqli_query($con,"select * from Register where UName='$username' and Password='$pass'");
if($row=mysqli_fetch_array($r))
{
	$_SESSION["idd"]=$row[0];
	$_SESSION["UName"]=$userId;
	header("location:Welcome.php");
}
else{
	// $_SESSION["err"]="Invalid Username and Password";
	echo "<script>alert('Invalid Username and Password')</script>";

}?>
