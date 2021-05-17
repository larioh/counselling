
<?php
 
// Create connection
$conn =  mysqli_connect('localhost','root','');
 
// Check connection
if (!$conn) {
    die("Connection failed: " .mysqli_error($conn)."<br>");
} 

 
// this will select the Database sample_db
mysqli_select_db($conn,"counselling") or die("db not found");


 //display Birth ceritificate

 $id=$_POST['id'];
	$select="select  * from clients where clients.id='$id'";
	$result=mysqli_query($conn,$select);
	if(mysqli_num_rows($result)>0){
		$output='';
	
		while($row=mysqli_fetch_array($result)){
				$output='

<div class="well pull-left" style="width:96%;min-width: 400px;margin-right: 1%;background-color;">
				<h4>Entry  Number: '.$_POST['id'].'</h4>
				
		   		<form  method="post"  role="form" class="form-horizontal" >
		   			
		   			
		   			<div class="panel pull-right" style="min-width: 200px;margin-left: 0%;">
		   					<div class="form-group has-feedback">
						 	<label for="user_pass" class="col-sm-4 control-label">Client name</label>
						  	<div class="col-sm-8"> 
						  		<input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['name'].'" readonly>
						   </div> 
						</div>
		   				
						<div class="form-group has-feedback">
						 	<label for="user_pass" class="col-sm-4 control-label">id </label>
						  	<div class="col-sm-8"> 
						  		<input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['id'].'" readonly>
						   </div> 
						</div>
					
						<div class="form-group has-feedback">
						 	<label for="user_pass" class="col-sm-4 control-label">Location </label>
						  	<div class="col-sm-8"> 
						  		<input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['location'].'" readonly>
						   </div> 
						</div>
						<div class="form-group has-feedback">
						 	<label for="user_pass" class="col-sm-4 control-label">Phone Number</label>
						  	<div class="col-sm-8"> 
						  		<input type="label" class="form-control" name="user_pass" id="user_pass" value="'.$row['phone'].'" readonly>
						   </div> 
						</div>
					


		   			</div>
		   			
		    	</form>
		    	 <div class="well pull-left" style="width:96%;min-width: 200px;margin-right: 1%;">
				
				<h4>Update Approval Status</h4>
		   		<form  method="post"  role="form" class="form-horizontal" >
		   			<div class="form-group has-feedback" style="margin-left:0%;">
						 	<label for="user_pass"  class="col-sm-5 control-label">Status Of Approval</label>
						  	<div class="col-sm-7"> 
						  		<select name="action" class="Actions form-control select" data-id1="'.$id.'"><option value="waiting" selected>Waiting </option><option value="ongoing">Ongoing</option>
     								 <option value="completed">Completed</option>
      							</select>
      							<div class="form-group has-feedback">
      							
						  	<div class="col-sm-12"> 
						  	<label for="user_pass" control-label">confirm payment</label>
						  		<select name="action" class="Actions1 form-control select" data-id1="'.$id.'"><option value="Unpaid" selected>Unpaid</option><option value="Paid">Paid</option>
     								 
      							</select>
      								
						   </div> 
						   </div>
						   </div>
						   </div>
						</div>
					
				</form>
		</div>

		';
		echo $output;
	}
			}

?>