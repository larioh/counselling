<?php include('linker.php');?>
 <div  style="background-color:#467fd0;border-radius: 15px 15px 15px 15px; min-height: 250px;">
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

                        <div class="panel-header">
          
                        </div>
                        <div class="panel-body">
                          <div class="table table-striped table-bordered table-hove r" style="background-color:#" id="page-wrapper">
                                <table class="table table-striped table-bordered table-hover" style="background-color: #">
                                    <thead style="background-color: #">
                                        <tr>
                                            <th>Entry no </th>
                                            <th>Client name</th>
                                            <th>problem description</th>
                                            <th>phone</th>
                                            <th>status</th>
                                            <th>Start date</th>
                                            <th>location</th>
                                            <th>Action1</th>
                                            
                                        </tr>
                                   </thead>
                                    <tbody>
                                    <?php
                                    require('dbconn.php');

                    $e_mail=$_SESSION['applicantusername'];
                    $query="SELECT * FROM clients where clients.`counsellor`='$firstname'";


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
                                           
                                           <td>'.$row['status'].'</td>
                                           <td>'.$row['Start_date'].'</td>
                                           <td>'.$row['location'].'</td>
                                            
                                          ';

echo '<td > <a href="feedback.php?variable1='.$row['name'].'&variable2='.$row['idnum'].'&variable3='.$row['dob'].'&variable4='.$row['problem'].'&variable5='.$row['phone'].'&variable6='.$row['address'].'&variable7='.$row['location'].'&variable8='.$row['id'].'" class="btn btn-primary" role="button" >Feedback</a></td>';


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
        
<script type="text/javascript">
  $(document).ready(function () {
$('#mytable').DataTable();
$('.dataTables_length').addClass('bs-select');
});
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

     

