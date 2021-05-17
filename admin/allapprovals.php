<?php
require('dbconn.php');
if (isset($_POST['action'])) {
$action=$_POST['action'];
$id=$_POST['id'];
$update="update clients set status='".$action."' where id='".$id."'";
	$output='';

	if(mysqli_query($conn,$update)){
		$output.="Status approved succesfully";
		}
	
	else{
		$output.=' Status Not Updated';
	}
echo $output;

}
else 
	if (isset($_POST['action1'])) {
	$action1=$_POST['action1'];
$id=$_POST['id'];
$update="update clients set payment='".$action1."' where id='".$id."'";
	$output='';

	if(mysqli_query($conn,$update)){
		$output.="Payment approved succesfully";
		}
	
	else{
		$output.=' Payment Status Not Updated';
	}
echo $output;

}
?>
