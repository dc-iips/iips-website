
<?php
 $conn = mysqli_connect('localhost','root','','pbas_db');
  if($conn)  {

     $User_Id = $_REQUEST['user'];

      
     
        
        $title = $_POST['Teach_APB_TNO'];
     	  $bep = $_POST['Teach_APB_BEP'];
        $issn = $_POST['Teach_APB_ISSN'];
     	  $review = $_POST['Teach_APB_WPR'];
     	  $coauthor = $_POST['Teach_APB_NOC'];
     	  $mainauthor = $_POST['Teach_APB_MA'];
     	  
          
        $var = "INSERT INTO `teach_apb` (User_Id , Teach_APB_TNO, Teach_APB_BEPl, Teach_APB_ISSN, Teach_APB_WPR,Teach_APB_NOC, Teach_APB_MA) VALUES ('$User_Id', '$title','$bep','$issn','$review','$coauthor','$mainauthor')";         
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

