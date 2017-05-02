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
                  $title = $_POST['FCP_TNO'];
              	  $Dcp = $_POST['FCP_BEP'];
                  $issn = $_POST['FCP_ISSN'];
              	  $noc = $_POST['FCP_NOC'];
              	  $mainauthor = $_POST['FCP_YN'];
     	  
              
                 $var = "INSERT INTO `teach_fcp` (Session,User_id,Teach_FCP_TNO, Teach_FCP_DCP, Teach_FCP_ISSN, Teach_FCP_NOC,Teach_FCP_MA, Data_Set) VALUES ('$session','$User_Id','$title', '$Dcp','$issn','$noc','$mainauthor', 'new')";         
               
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

   