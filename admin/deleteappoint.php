<?php
$con=mysqli_connect("localhost","root","","counselling");// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_GET['id']; // $id is now defined
mysqli_query($con,"DELETE FROM clients WHERE id='".$id."'");
mysqli_close($con);
header("Location: profile.php");
?> 