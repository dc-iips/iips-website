
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
        $Session = $_POST['selectbox'];
        $User_id = $_SESSION['username']; 
        $BPE_TPN = $_POST['BPE_TPN'];
        $BPE_TBA = $_POST["BPE_TBA"];
        $BPE_PISSN = $_POST['BPE_PISSN'];
     	  $BPE_WPR = $_POST['BPE_PR'];
        $factor = $_POST['BPE_IF'];
        
        $BPE_NOC = $_POST['BPE_NOC'];
        $mainauthor= $_POST['BPE_YN'];

     	  
        $var = "INSERT INTO `teach_bpe` (Session,User_id, Teach_BPE_TPN, Teach_BPN_TBA, Teach_BPE_PISSN, Teach_BPE_WPR,Teach_BPE_factor,Teach_BPE_NOC, Teach_BPE_YN, Data_Set)
                                 VALUES ($Session,'$User_id','$BPE_TPN','$BPE_TBA','$BPE_PISSN','$BPE_WPR','$factor', '$BPE_NOC','$mainauthor', 'new')";         
          
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
  }  
?>

