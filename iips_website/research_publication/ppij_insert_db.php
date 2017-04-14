<?php
 
    session_start();
    if(!isset($_SESSION['username']))
    {
       echo "<script>window.open('../index.php','_self')</script>";     
    }
    else
    {

      $conn = mysqli_connect('localhost','root','','pbas_db');
      if($conn)  {

                  $User_Id = $_SESSION['username'];
                  $session = $_POST["session"];
                  $title = $_POST['PPIJ_TNO'];
              	  $journal = $_POST['PPIJ_Journal'];
                  $issn = $_POST['PPIJ_ISBN'];
              	  $review = $_POST['PPIJ_PR'];
              	  $coauthor = $_POST['PPIJ_NCA'];
              	  $mainauthor = $_POST['PPIJ_YN'];
     	  
              
                 $var = "INSERT INTO `teach_ppij` (Session, User_Id , Teach_PPIJ_TNO, Teach_PPIJ_Journal, Teach_PPIJ_ISBN, Teach_PPIJ_PR,Teach_PPIJ_NCA, Teach_PPIJ_MA, Data_Set) VALUES ('$session','$User_Id', '$title','$journal','$issn','$review','$coauthor','$mainauthor', 'new')";         
               
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

