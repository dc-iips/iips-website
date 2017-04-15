
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
                  $toa = $_POST['COCURRI_TOA'];
              	  $yearly = $_POST['COCURRI_YSR'];
              
                 $var = "INSERT INTO `teach_cocurri` (Session, User_Id , Teach_COCURRI_TOA, Teach_COCURRI_YSR,  Data_Set) VALUES ('$session','$User_Id', '$toa','$yearly', 'new')";         
               
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

