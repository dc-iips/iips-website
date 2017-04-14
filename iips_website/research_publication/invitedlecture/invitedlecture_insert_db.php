
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
                  $tol = $_POST['ILC_TOL'];
              	  $tcs = $_POST['ILC_TCS'];
                  $doe = $_POST['ILC_DOE'];
              	  $org = $_POST['ILC_ORG'];
              	  $wins = $_POST['ILC_WINS'];
     	  
              
                 $var = "INSERT INTO `teach_ilc` (Session, User_Id , Teach_ILC_TOL, Teach_ILC_TCS, Teach_ILC_DOE, Teach_ILC_Organized,Teach_ILC_WINS, Data_Set) VALUES ('$session','$User_Id', '$tol','$tcs','$doe','$org','$wins', 'new')";         
               
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

