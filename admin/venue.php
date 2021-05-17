<?php include('linker.php');?>
 <div  style="background-color:#467fd0;border-radius: 15px 15px 15px 15px; min-height: 250px;">
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-header">
                          <div class="panel-header">
                         <td><a href="addVenue.php" class="btn btn-primary" role="button">Add Venue</a></td>
                        </div>
                        <div class="panel-body">
                          <div class="table table-striped table-bordered table-hove r" style="background-color:#" id="page-wrapper">
                                <table class="table table-striped table-bordered table-hover" style="background-color: #">
                                    <thead style="background-color: #">
                                        <tr>
                                            <th>Entry no </th>
                                            <th>Venue name</th>
                                            <th>Venue location</th>
                                            <th>Action</th>
                                        </tr>
                                   </thead>
                                    <tbody>
                                    <?php
                                    require('dbconn.php');

                    $e_mail=$_SESSION['applicantusername'];
                    $query="SELECT * FROM venuelist";


                                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                    $count = mysqli_num_rows($result);
                                    if ($count >0){
                                      //echo "Crops  =",  $count;
                                      $counts=1;
                                      while ($row=mysqli_fetch_array($result)){
                                            echo '<tr><td>'.$row['Vno'].'</td>
                                           <td>'.$row['V_name'].'</td> 
                                           <td>'.$row['V_location'].'</td> ';
echo'<td><a href="deletevenue.php?Vno='.$row['Vno'].'" class="btn btn-danger " role="button" Vno="Vno" data-id2="'.$row['Vno'].'" >Delete</a></td>';
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

     


    