<?php
$con=mysqli_connect("localhost","root","","counselling");// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$DepID = $_GET['DepID']; // $DepID is now defined
mysqli_query($con,"DELETE FROM counsellors WHERE DepID='".$DepID."'");
mysqli_close($con);
header("Location: counsellors.php");
?> 