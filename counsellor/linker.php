<?php
  require('dbconn.php'); 
  session_start();
  if(!isset($_SESSION['applicantusername'])){
    header("Location:index.php?ref=Please Login First");
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
    
    
     <div class="container-fluid">
              <nav class="navbar navbar-light"   style="background-color: #467fd0;">
  <!-- Navbar content -->

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse-1">
                    <!--span class="sr-only">Toggle navigation</span-->
                    Menu <i class="fa fa-bars"></i>
                </button>
                <!--a class="navbar-brand" href="index.php">Welcome to online birth registraton </a-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-centre">
                    
                    <li>
                        <a  href="profile.php" style="color:black">Home</a>
                    </li>
                    <li>
                        <a  href="prevsessions.php" style="color:black">Previous Sessions</a>
                    </li>
                  
       
                          <li><a href="logout.php" onclick="return confirm('Are you sure you want to logout?');" style="color:black">Logout</a></li>
                        
                  
                    
                </ul>
                    <ul class="nav navbar-nav navbar-right"> 
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">

             <?php
                 $username=$_SESSION['applicantusername'];
                  $sql = "SELECT * FROM account where e_mail='$username'";
               $result = $conn->query($sql);

                  if ($result->num_rows > 0) {

               while($row = $result->fetch_assoc()) {
        //  // $passport = $row['passport'];
        $firstname = $row['n_ame'];
        $idnum = $row['id_no'];

          }
                   } 
          //else {

        //           }
                  $conn->close();
      
        ?>
              <span class="hidden-sm" style="color:black"><?php echo $firstname; ?></span><br>
            </a>
           <ul class="dropdown-menu"> 
              <li>
                 <center>
              <div class="well" style="width: 300px;">
              <?php   
                
                  ?>
                <p>
                  <?php echo $idnum; ?>
                  <br><small> <?php echo $username; ?></small>
                </p>
                </div>
                </center>
              </li> 
              <li class="divider"></li> 
              <li>
                <div class="panel" style="width: 300px;">
                <div class="pull-left">
                  <!-- <a id="applicant_profile" class="btn btn-default btn-small btn-success">Profile</a> -->
                  <button class="btn btn-default btn-small btn-success"> View Profile </button>
                </div>
                <div class="pull-right">
                  <a href="logout.php"><button class="btn btn-default btn-small btn-danger">Sign out  </button></a>
                </div>
                </div>
              </li>
           </ul>
        </li> 
    </ul> 
            </div>
            </nav>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

   
   </div>

    






</html>
