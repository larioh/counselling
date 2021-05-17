<?php include('linker.php');?>
 <div  style="background-color:#467fd0;border-radius: 15px 15px 15px 15px; min-height: 250px;">
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-header">
                          <td><label style="color:#467fd0">Yet to assign counsellors</label></td>
                        <div class="panel-body">
                          <div class="table table-striped table-bordered table-hove r" style="background-color:#" id="page-wrapper">
                                <table class="table table-striped table-bordered table-hover" style="background-color: #">
                                    <thead style="background-color: #">
                                        <tr>
                                            <th>Entry no </th>
                                            <th>Client name</th>
                                            <th>Problem</th>
                                            <th>Phone</th>
                                            <th>Location</th>
                                            <th>Action1</th>
                                            <th>Action2</th>
                                            <th>Action3</th>
                                        </tr>
                                   </thead>
                                    <tbody>
                                    <?php
                                    require('dbconn.php');

                    $e_mail=$_SESSION['applicantusername'];
                    $query="SELECT  * FROM clients where counsellor='To be allocated'";


                                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                    $count = mysqli_num_rows($result);
                                    if ($count >0){
                                      //echo "Crops  =",  $count;
                                      $counts=1;
                                      while ($row=mysqli_fetch_array($result)){
                                            echo '<tr><td>'.$row['id'].'</td>
                                           <td>'.$row['name'].'</td>
                                           <td>'.$row['problem'].'</td>
                                           <td>'.$row['phone'].'</td>
                                           <td>'.$row['location'].'</td>
                                           
 
                                            
                                          ';
echo '<td > <a href="updateappoint.php?variable1='.$row['name'].'&variable2='.$row['idnum'].'&variable3='.$row['dob'].'&variable5='.$row['phone'].'&variable6='.$row['address'].'&variable8='.$row['id'].'" class="btn btn-primary" role="button" >Assign Counsellor</a></td>';

  echo '<td ><button class="viewprof btn btn-success" name="id" data-id1="'.$row['id'].'">View Profile</button></td>';

echo'<td><a href="deleteappoint.php?id='.$row['id'].'" class="btn btn-danger " role="button" id="id" data-id2="'.$row['id'].'" >Delete</a></td>';
                                            echo '</tr>';
                                            $counts++;
                                      }
                                    }

                                    ?>
                                    </tbody>

                                </table>

                            </div>
 
                        </div>
  
     </div>
      </div>
       </div>
        </div>
                <div class="modal fade" id="modalDetails" tabindex="-1" role="dialog" aria-labelledby="filldetails" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document" style="border-radius:10px 10px 10px 10px;width: 70%;min-width: 200px";>
    <div class="modal-content">
      <div class="modal-header" style="background-color:#682b33; ">
        <h5 class="modal-title" id="filldetails">Fill the Details below</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modalprofBody"  >

       
      </div>
      <div class="modal-footer" style="background-color:#682b33; ">
       
        
      </div>
    </div>
  </div>
</div>
        
<script type="text/javascript">
  $(document).ready(function () {
$('#mytable').DataTable();
$('.dataTables_length').addClass('bs-select');
});
</script>

 <script type="text/javascript">
      
      $(document).on('click','.viewprof',function(){
      var id=$(this).data("id1");
   

      $.ajax({
        url:"update.php",
        method:"POST",
        data:{id:id},
        dataType:"text",
        success:function(data){
       $("#modalprofBody").html(data);
               $("#filldetails").html(" Appointment Information");
              
                $("#modalDetails").modal('show');
         
    }
    
  });
  });
         $(document).on('change','.Actions',function(){
    var idno=$(this).data("id1");
    var action=$(this).val();
  $.ajax({
    url:"approvals.php",
    method:"POST",
    data:{action:action,id:id},
    dataType:"text",
    success:function(data){
    alert(data);
    }
    
  });
  });
      $(document).on('change','.Actions1',function(){
    var idno=$(this).data("id1");
    var action1=$(this).val();
  $.ajax({
    url:"approvals.php",
    method:"POST",
    data:{action1:action1,id:id},
    dataType:"text",
    success:function(data){
    alert(data);
    }
    
  });
  })
  </script>
  <script type="text/javascript">

//print
function printDiv() {
    //document.getElementById('').style.display = "block";
         var divToPrint = document.getElementById('page-wrapper');
    var htmlToPrint = '' +
        '<style type="text/css">' +
        'table th, table td {' +
        'border:1px solid #000;' +
        'padding;0.5em;' +
        'text-align:center;'+
        '}' +
        '#page-wrapper{'+
        'text-align:center;'
        +'}'+
        '#ptable{'+
        'margin-left: auto;'+
        'margin-right: auto;'+
        'width:100%;'+
        +'}'+
         '#details{'+
        'margin-left: auto;'+
        'margin-right: auto;'+
        'width:100%;'+
        +'}'+
        '#hf{'+
    'text-decoration: underline;'
+'}'+
        '</style>';
    htmlToPrint += divToPrint.outerHTML;
    newWin = window.open("");
    newWin.document.write(htmlToPrint);
    newWin.print();
    newWin.close();
       }
</script>

     

