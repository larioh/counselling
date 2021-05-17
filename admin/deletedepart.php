<?php
$con=mysqli_connect("localhost","root","","counselling");// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$Num = $_GET['Num']; // $Num is now defined
mysqli_query($con,"DELETE FROM departmentlist WHERE Num='".$Num."'");
mysqli_close($con);
header("Location: department.php");
?> 