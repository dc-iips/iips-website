
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
                  $session = $_POST["select_box"];
                  $numenrolled = $_POST['RG_NE'];
              	  $thesis = $_POST['RG_TS'];
                  $award = $_POST['RG_DA'];
              	  
              
                 $var = "INSERT INTO `teach_rg` (Session, User_Id , Teach_RG_NE, Teach_RG_TS, Teach_RG_DA, Data_Set) VALUES ('$session','$User_Id', '$numenrolled','$thesis','$award', 'new')";         
               
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

