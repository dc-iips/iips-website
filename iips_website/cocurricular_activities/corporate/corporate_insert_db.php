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
                  $toa = $_POST['CORPORATE_TOA'];
              	  $yearly = $_POST['CORPORATE_YSR'];
              
                 $var = "INSERT INTO `teach_clmi` (Session, User_Id , Teach_CLMI_TOA, Teach_CLMI_YSR, Data_Set) VALUES ('$session','$User_Id', '$toa','$yearly', 'new')";         
               
                 if(mysqli_query($conn ,$var)){
                      // exit();
                      echo "Record Submitted";
                  }else{
                     	echo "<script>alert('Record not Submitted') </script>";
                 }        		
        } 
        else  {
             echo "not conncted";
        }   

  }//else session  
?>