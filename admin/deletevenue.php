<?php
$con=mysqli_connect("localhost","root","","counselling");// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$Vno = $_GET['Vno']; // $Vno is now defined
mysqli_query($con,"DELETE FROM venuelist WHERE Vno='".$Vno."'");
mysqli_close($con);
header("Location: venue.php");
?> 