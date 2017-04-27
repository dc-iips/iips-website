
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
                  $APB_TNO = $_POST['APB_TNO'];
              	  $APB_BEP = $_POST['APB_BEP'];
                  $APB_ISSN = $_POST['APB_ISSN'];
              	  $APB_WPR = $_POST['APB_WPR'];
              	  $APB_NOC = $_POST['APB_NOC'];
              	  $APB_YN = $_POST['APB_YN'];
     	  
              
                 $var = "INSERT INTO `teach_cpc` ( User_Id ,Session ,Teach_APB_TNO, Teach_APB_BEP, Teach_APB_ISSN, Teach_APB_WPR, Teach_APB_NOC, Teach_APB_MA, Data_Set) VALUES ('$User_Id', '$session','$APB_TNO', '$APB_BEP', '$APB_ISSN', '$APB_WPR', '$APB_NOC', '$APB_YN' , 'new')";         
               
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

