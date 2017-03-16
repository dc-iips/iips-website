<?php

include '../DBConnect.php';
$delete_ppij_id= $_REQUEST['up'];

//Make Date_Set invalid
$query1 = mysql_query("UPDATE `teach_ppij` SET  Data_Set='updated' where PPIJ_ID='$delete_ppij_id' ");

     $User_Id = $_REQUEST['user'];

        $session = $_POST["session"];
        $title = $_POST['PPIJ_TNO'];
     	  $journal = $_POST['PPIJ_Journal'];
        $issn = $_POST['PPIJ_ISBN'];
     	  $review = $_POST['PPIJ_PR'];
     	  $coauthor = $_POST['PPIJ_NCA'];
     	  $mainauthor = $_POST['PPIJ_YN'];
     	  
          
        $var = "INSERT INTO `teach_ppij` (Session, User_Id , Teach_PPIJ_TNO, Teach_PPIJ_Journal, Teach_PPIJ_ISBN, Teach_PPIJ_PR,Teach_PPIJ_NCA, Teach_PPIJ_MA) VALUES ('$session','$User_Id', '$title','$journal','$issn','$review','$coauthor','$mainauthor')";         
        echo "Record Submitted";
        if(mysqli_query($conn ,$var)){
               // exit();
          echo "Record Submitted";
        }else{
           	echo "<script>alert('Record not Submitted') </script>";
        }              		
      

//Make a new entry of updated data with new ppij_id'
//include "ppij_insert_db.php";

?>