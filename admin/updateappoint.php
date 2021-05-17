       <?php
require('dbconn.php');

 if(isset($_POST['submit'])){
  $counsellor=$_POST['counsellor'];
  $venuelist=$_POST['venuelist'];
  $ddate=$_POST['ddate'];
  $id=$_POST['ids'];
   
   


$query="UPDATE `counselling` .`clients` SET `counsellor`='$counsellor',`Venue`='$venuelist',`Start_date`='$ddate'  where id='".$id."'";



if(mysqli_query($conn,$query)==TRUE) {
  echo '<script language="javascript">';
              echo 'alert("Assignment was successfully")';
              echo '</script>';
              echo "<script>window.open('profile.php','_self')</script>";
    //header("location:..index.php"); // redirects to view
   }
   else
   {
    $errMSG = "error while inserting....";

   }
 }

?>


<?php include('linker.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Appointment details</title>
    

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" >


    <!-- Custom Fonts -->
    
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script src="bootsrap/scripts/bootstrap.js"></script>
<script src="bootstrap/scripts/jquery.js"></script>
<script src="bootstrap/scripts/bootstrap.min.js"></script>
<script type="text/javascript">
      $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
</script>
	</head>
	 <div class="container">
        <div class="row">
            
           
        <div class="panel-body"style="background-color:#467fd0;margin-top: 0%;padding-bottom: 5px;border-radius: 15px 15px 15px 15px;height: 100%;width: 100%;color:white; ">
             <div class="panel-heading">
                <h2 class="panel-title" style="text-align: center;font-size: 30px;"><b> Fill in  the   Details below <b></h2><br><br>
                    </div>
            <form action="updateappoint.php" method="post"  class="form-horizontal" enctype="multipart/form-data">
                <div class="container" style="padding-top: 2%;padding-bottom: 2%; width: 49%;min-width: 250px;border-radius: 15px 15px 15px 15px;" >
<!-- <form action="index.php" method="post"> -->


  <div class="form-group">
     <div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">Entry No</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="ids" value="<?php echo $_GET['variable8']; ?>" readonly="true" required="true" 
        >
      </div>
  </div>

    </div>
     <div class="form-group">
     <div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">Client Name</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="cname"readonly="true" value="<?php echo $_GET['variable1']; ?>"  required="true"
        >
      </div>
  </div>

    </div>
    <div class="form-group">
     <div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">Phone number</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" readonly="true" value="<?php echo $_GET['variable5']; ?>"  name="phone"  required="true"
        >
      </div>
  </div>


    </div>

  <div class="form-group">
<label for="inputname"class="col-sm-3 control-label">id number</label>
<div class="col-sm-6">
<input type="number" class="form-control" name="idno"  readonly="true" value="<?php echo $_GET['variable2']; ?>"  required="true">
      </div>
 </div>
   <div class="form-group">
<label for="inputname"class="col-sm-3 control-label">address</label>
<div class="col-sm-6">
<input type="textarea" class="form-control" name="ad" readonly="true"  value="<?php echo $_GET['variable6']; ?>"  required="true">
      </div>
 </div>


  <div class="form-group">
<label for="inputname"class="col-sm-3 control-label">date of birth</label>
<div class="col-sm-6">
  <input type="date" class="form-control" name="ddate"  readonly="true" value="<?php echo $_GET['variable3']; ?>"    required="true">
      </div>
 </div>
   <div class="form-group" >
<label for="inputname"class="col-sm-3 control-label">Counsellor</label>
                    
<?php      
require('dbconn.php');
$sql = "SELECT Counsellor_name FROM counsellors";
$result = mysqli_query($conn,$sql);
echo "<select name='counsellor' class='col-sm-6' style='color:black;'>";
while ($row = mysqli_fetch_array($result)) {
echo "<option value='" . $row['Counsellor_name'] ."'>" . $row['Counsellor_name'] ."</option>";
}
echo "</select>";
?>
</div>
   <div class="form-group" >
<label for="inputname"class="col-sm-3 control-label">Venue</label>
                    
<?php      
require('dbconn.php');
$sql = "SELECT V_name FROM venuelist";
$result = mysqli_query($conn,$sql);
echo "<select name='venuelist' class='col-sm-6' style='color:black;'>";
while ($row = mysqli_fetch_array($result)) {
echo "<option value='" . $row['V_name'] ."'>" . $row['V_name'] ."</option>";
}
echo "</select>";
?>
</div>
  <div class="form-group">
<label for="inputname"class="col-sm-3 control-label">Counselling date</label>
<div class="col-sm-6">
  <input type="date" class="form-control" name="ddate"  required="true">
      </div>
 </div>
  <button type="submit" class="btn btn-success btn-block"   name="submit">Assign</button>

  </form> 

</div>

</div>
    
   </div><br>
    
		 <style>
	 body {
       background-color:;
        border-radius: 2px;

   
  height: 100%;
  border-radius:30px;
  margin-left: 40px;
  margin-right: 40px; 
           }
    #footer{
      border: 2px;
  background-color: #CCFFFF;
  border-radius: 2px;
  height: 50px;
  margin-top: 0%;


    }
    #navbar{
      border-radius: 25px;
      border:2px solid black;
    }
    #bodycolor{ 
      
   background-repeat:no-repeat;
  background-size: cover;
      
       min-height:500px;
     }
       #black
       {
        background-color:black;
        border-color: solid black; 
         //float: left;
         height: 100%;
         width: 100%;
         margin-bottom: 1%;

  padding-right: 0px;
  padding-left: 0px;

       }

     </style>
</div>
</body>
</html>