<?php

    session_start();
    if(!isset($_SESSION['username']))
    {
       echo "<script>window.open('../../index.php','_self')</script>";     
    }
    else
    {

      $conn = mysqli_connect('localhost','root','','pbas_db');
      if($conn)  {

                  $User_Id = $_SESSION['username'];
                  $session = $_POST["session"];
                  $toa = $_POST['PROFESSIONAL_TOA'];
              	  $yearly = $_POST['PROFESSIONAL_YSR'];
              
                 $var = "INSERT INTO `teach_pda` (Session, User_Id , Teach_PDA_TOA, Teach_PDA_YSR, Data_Set) VALUES ('$session','$User_Id', '$toa','$yearly', 'new')";         
               
                 if(mysqli_query($conn ,$var)){
                      // exit();
                      echo "Record Submitted";
                  }else{
                     	echo "<script>alert('Record not Submitted') </script>";
                 }        		
        } 
        else  {
             echo "not connected";
        }   

  }//else session  
?>