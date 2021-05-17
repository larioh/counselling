<?php
require('dbconn.php');
    if(isset($_POST['submit'])){
  $n_ame = $_POST['name'];
  $id_no = $_POST['idno'];
  $e_mail = $_POST['usermail'];
  $p_assword=$_POST['pass'];
  $phone=$_POST['numbr'];
  $location=$_POST['loca'];
  $depart=$_POST['action'];
  $random_string = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 6)), 0, 6);
  $salt = sha1(rand());
  $salt = substr($salt, 0, 10);
  $encrypted = password_hash($pass.$salt, PASSWORD_DEFAULT);
  $hash = array("salt" => $salt, "encrypted" => $encrypted);
  $encrypted_password = $hash["encrypted"];
  $salt = $hash["salt"];

      $insertaccountsql="INSERT INTO `counselling`.`account` (`n_ame`, `id_no`, `e_mail`, `p_assword`) VALUES ( '$n_ame', '$id_no', '$e_mail','$encrypted')";
      $insertuserrolesql="INSERT INTO `counselling`.`userroles` ( `username`, `Userrole`,`id_no`) VALUES ('$e_mail', 'Counsellor','$id_no')";
      $inserDepart="INSERT INTO `counselling`.`counsellors` ( `DepartName`, `Counsellor_name`,`Counsellor_idno`,`Counsellor_phone`,`Counsellor_email`,`Counsellor_location`) VALUES ('$depart', '$n_ame','$id_no','$phone','$e_mail','$location')";
         $insertdepartresult=mysqli_query($conn,$inserDepart); 
      $insertaccountresult=mysqli_query($conn,$insertaccountsql);
      if ($insertaccountresult){
        if(mysqli_query($conn,$insertuserrolesql)){
            session_start();
        $_SESSION['filltaskinfo']=$e_mail;

        echo "New User Created for Account for ".$e_mail.'<br> Please use  your Email and Password assigned to login';
         header("Location:index.php");

        }
        else{
          echo "Could not Update your Role as a User";
        }
        
      }
      else{
        echo "New User for Account  ".$e_mail." Not Saved".mysqli_error($conn);
      }
    }
    else{
      echo "Data Not submitted";
    }

?>