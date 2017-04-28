
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
                  $title = $_POST['CPC_Title'];
              	  $agency = $_POST['CPC_Agency'];
                  $month = $_POST['CPC_Month'];
              	  $day = $_POST['CPC_Day'];
              	  $GAM = $_POST['CPC_GAM'];
              	  $WPD = $_POST['CPC_WPD'];
     	  
              
                 $var = "INSERT INTO `teach_cpc` (Session, User_Id ,Teach_CPC_Title, Teach_CPC_Agency, Teach_CPC_month, Teach_CPC_day, Teach_CPC_GAM, Teach_CPC_WPD, Data_Set) VALUES ('$session','$User_Id', '$title', '$agency', '$month', '$day', '$GAM', '$WPD' , 'new')";         
               
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

