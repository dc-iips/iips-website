
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

     //$User_Id = $_REQUEST['user'];

      
        $user_id = $_SESSION['username'];
        $session = $_POST["session"];
        $title = $_POST['APB_TNO'];
     	  $bep = $_POST['APB_BEP'];
        $issn = $_POST['APB_ISSN'];
     	  $review = $_POST['APB_WPR'];
     	  $coauthor = $_POST['APB_NOC'];
     	  $mainauthor = $_POST['APB_MA'];
     	  
        $var = "INSERT INTO `teach_apb` (Session, user_id , Teach_APB_TNO, Teach_APB_BEP, Teach_APB_ISSN, Teach_APB_WPR,Teach_APB_NOC, Teach_APB_MA, Data_Set)
                                 VALUES ('$session','$user_id', '$title','$bep','$issn','$review','$coauthor','$mainauthor', 'new')";         
          
        echo "Record Submitted";
        if(mysqli_query($conn ,$var)){
               // exit();
              
              
              echo "Record Submitted";
        }else{
           	echo "<script>alert('Record not Submitted') </script>";
        }              		
      

  } else  {
     echo "not conncted";
  }     
?>

