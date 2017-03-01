
<?php
 $conn = mysqli_connect('localhost','root','','pbas_db');
  if($conn)  {
     echo "connected";
  } else  {
     echo "not conncted";
  }          

  if(isset($_POST['ppij_save']))
  {
       // $User_Id = $_SESSION['username'];
        $title = $_POST['PPIJ_TNO'];
     	  $journal = $_POST['PPIJ_Journal'];
        $issn = $_POST['PPIJ_ISBN'];
     	  $review = $_POST['PPIJ_PR'];
     	  $coauthor = $_POST['PPIJ_NCA'];
     	  $mainauthor = $_POST['PPIJ_YN'];
     	  
          
        $var = "INSERT INTO `teach_ppij` (Teach_PPIJ_TNO, Teach_PPIJ_Journal, Teach_PPIJ_ISBN, Teach_PPIJ_PR,Teach_PPIJ_NCA, Teach_PPIJ_MA) VALUES ('$title','$journal','$issn','$review','$coauthor','$mainauthor')";         
          
        if(mysqli_query($conn ,$var)){
              echo "<script>alert('Record Submitted') </script>";
               exit();
        }else{
           	echo "<script>alert('Record not Submitted') </script>";
        }              		
   }
?>

