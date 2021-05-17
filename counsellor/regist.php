<?php include('nav.php');?>
<!DOCTYPE html>
<html>
  <head><title>login</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" >
	<script src="bootstrap/scripts/jquery.js"></script>
	<script src="bootstrap/scripts/bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  </head>
     
<body>
<div class="container" style="padding-top: 2%;padding-bottom: 10%;width: 40%; height:90%;border-radius: 15px 15px 15px 15px;background-color:#682b33;margin-top:50px;">
	<div class="login-panel panel panel-default">
     <div class="panel-heading" style="background-color:#682b33;height:60px;">
     <h3 class="panel-title"style="color:white;background-color:#682b33;">Counsellor Registration Form</h3><br><br>
    </div>
    <div class="panel-body"style="background-color:" >
	<form action="code.php" method="post">
	<div class="form-group" style="background-color:;">
	<label> Full Names</label>
	<div class="form-group has-feedback">
	<input class="form-control" type="text" name="name" placeholder="name" required="true" title="Only uppercase letters are accepted">
	</div>
	<label> Identification number</label>
	<div class="form-group has-feedback">
	<input class="form-control" type="number" name="idno" placeholder="34765489" required="true"></div>
	<label>Phone Number</label>
	<div class="form-group has-feedback">
	<input class="form-control" type="number" name="numbr" placeholder="0712193456" required="true"></div>
	<label>Location</label>
	<div class="form-group has-feedback">
	<input class="form-control" type="text" name="loca" placeholder="kisumu" required="true"></div>
	<div class="form-group has-feedback" >
<label>Depatment Names</label>  
<div class="form-group has-feedback">                 
<?php      
require('dbconn.php');
$sql = "SELECT DepartName FROM departmentlist";
$result = mysqli_query($conn,$sql);
echo "<select name='action' class='col-sm-12'>";
while ($row = mysqli_fetch_array($result)) {
echo "<option value='" . $row['DepartName'] ."'>" . $row['DepartName'] ."</option>";
}
echo "</select>";
?>
</div></div>
<div class="form-group has-feedback">
	<label> Email</label>
	<div class="form-group has-feedback">
	<input class="form-control" type="email" name="usermail" placeholder="example@gmail.com"  required="true"></div></div>
	<div class="form-group has-feedback"> 
	<label> Password</label>
	<div class="form-group has-feedback">
	<input class="form-control" type="password" name="pass" placeholder="Password" required="true"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"></div>
  <button type="submit" class="btn btn-success btn btn-block" name="submit"> submit</button> 
</div>
</div>
</form>
</div>
</div>
</div>
</body>