<?php
$con=mysqli_connect("localhost","root","","counselling");// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$payno = $_GET['payno']; // $Num is now defined
mysqli_query($con,"DELETE FROM payments WHERE payno='".$payno."'");
mysqli_close($con);
header("Location: payments.php");
?> 