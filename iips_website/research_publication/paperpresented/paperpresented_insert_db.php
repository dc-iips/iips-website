
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
                  $tpp = $_POST['PPC_TPP'];
              	  $tcs = $_POST['PPC_TCS'];
                  $doe = $_POST['PPC_DOE'];
              	  $org = $_POST['PPC_ORG'];
              	  $wins = $_POST['PPC_WINS'];
     	  
              
                 $var = "INSERT INTO `teach_ppc` (Session, User_Id , Teach_PPC_TPP, Teach_PPC_TCS, Teach_PPC_DOE, Teach_PPC_Organized,Teach_PPC_WINS, Data_Set) VALUES ('$session','$User_Id', '$tpp','$tcs','$doe','$org','$wins', 'new')";         
               
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

