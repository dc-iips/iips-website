
<?php
 $conn = mysqli_connect('localhost','root','','pbas_db');
  if($conn)  {

     $User_Id = $_REQUEST['user'];

     if(isset($_POST['ppij_submit']) )
     {
        
        $title = $_POST['PPIJ_TNO'];
     	  $journal = $_POST['PPIJ_Journal'];
        $issn = $_POST['PPIJ_ISBN'];
     	  $review = $_POST['PPIJ_PR'];
     	  $coauthor = $_POST['PPIJ_NCA'];
     	  $mainauthor = $_POST['PPIJ_YN'];
     	  
          
        $var = "INSERT INTO `teach_ppij` (User_Id , Teach_PPIJ_TNO, Teach_PPIJ_Journal, Teach_PPIJ_ISBN, Teach_PPIJ_PR,Teach_PPIJ_NCA, Teach_PPIJ_MA) VALUES ('$User_Id', '$title','$journal','$issn','$review','$coauthor','$mainauthor')";         
        //echo $User_Id;
        if(mysqli_query($conn ,$var)){
               // exit();
              echo "<script>window.open('../research_pub.php','_self')</script>";
              
              echo "<script>alert('Record Submitted') </script>";
        }else{
           	echo "<script>alert('Record not Submitted') </script>";
        }              		
      }

  } else  {
     echo "not conncted";
  }     
?>

