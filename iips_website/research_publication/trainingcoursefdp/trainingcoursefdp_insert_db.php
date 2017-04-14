
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
                  $prog = $_POST['FDP_PROG'];
              	  $month = $_POST['FDP_MONTH'];
                  $days = $_POST['FDP_DAYS'];
              	  $org = $_POST['FDP_ORG'];
     	  
              
                 $var = "INSERT INTO `teach_fdp` (Session, User_Id , Teach_FDP_Programme, Teach_FDP_month, Teach_FDP_days, Teach_FDP_Organized, Data_Set) VALUES ('$session','$User_Id', '$prog','$month','$days','$org','new')";         
               
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

