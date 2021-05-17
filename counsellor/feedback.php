       <?php
include('linker.php');
require('dbconn.php');
 if(isset($_POST['submit'])){
  $cname = $_POST['cname'];
  $phone=$_POST['phone'];
  $pro=$_POST['pro'];
  $idno = $_POST['idno'];
  $com=$_POST['com'];
  $reff=$_POST['reff'];
  $stat=$_POST['stat'];
  
   
   $query="INSERT INTO  counselling .`session` (`client_name`,`client_phone`,`problem`,`id_number`,`c_comment`,`refferal`,`counselling_status`,`counsellor_name`) VALUES('$cname','$phone','$pro','$idno','$com','$reff','$stat','$firstname')";
if(mysqli_query($conn,$query)==TRUE) {
  echo '<script language="javascript">';
              echo 'alert("Feedback Saved successfully")';
              echo '</script>';
              echo "<script>window.open('prevsessions.php','_self')</script>";
    //header("location:..index.php"); // redirects to view
   }
   else
   {
    $errMSG = "error while inserting....";

   }
 }

?>
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
            <form action="feedback.php" method="post"  class="form-horizontal" enctype="multipart/form-data">
                <div class="container" style="padding-top: 2%;padding-bottom: 2%; width: 49%;min-width: 250px;border-radius: 15px 15px 15px 15px;" >
<!-- <form action="index.php" method="post"> -->

     <div class="form-group">
     <div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">Client Name</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="cname" value="<?php echo $_GET['variable1']; ?>" readonly="true"  required="true"
        >
      </div>
  </div>

    </div>
    <div class="form-group">
     <div class="form-group">
      <label for="inputname"class="col-sm-3 control-label">Phone number</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" value="<?php echo $_GET['variable5']; ?>"  name="phone" readonly="true"  required="true"
        >
      </div>
  </div>

    </div>
  <div class="form-group">
<label for="inputname"class="col-sm-3 control-label">Problem description</label>
<div class="col-sm-6">
<input type="textarea" class="form-control" name="pro"  value="<?php echo $_GET['variable4']; ?>"  required="true" readonly="true" >
      </div>
 </div>
  <div class="form-group">
<label for="inputname"class="col-sm-3 control-label">id number</label>
<div class="col-sm-6">
<input type="number" class="form-control" name="idno"  value="<?php echo $_GET['variable2']; ?>"  readonly="true" required="true">
      </div>
 </div>
   <div class="form-group">
<label for="inputname"class="col-sm-3 control-label">Counsellor's Comments</label>
<div class="col-sm-6">
<textarea class="form-control"  name="com" placeholder="" required="true"></textarea>
      </div>
 </div>
   <div class="form-group">
<label for="inputname"class="col-sm-3 control-label">Refferal</label>
<div class="col-sm-6">
<select name="reff" class="Actions form-control select">
  <option value="Yes" selected>Yes </option>
  <option value="No">No</option>
</select>
</div>
 </div>
  <div class="form-group">
<label for="inputname"class="col-sm-3 control-label">Counselling Status</label>
<div class="col-sm-6">
<select name="stat" class="Actions form-control select">
  <option value="Complete" selected>Complete </option>
  <option value="Continuation">Continuation</option>
</select>
</div>
 </div>

  <button type="submit" class="btn btn-success btn-block"   name="submit">Submit Feedback</button>

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