 <?php  

    session_start();
    if(!isset($_SESSION['username']))
    {
       echo "<script>window.open('../index.php','_self')</script>";     
    }
    else
    {
       $connect = mysqli_connect("localhost", "root", "", "pbas_db");  
  
     
       $query1 = "SELECT * FROM teach_cpc where CPC_ID='".$_POST["cpc_id"]."'";  
       $query2 = "UPDATE teach_cpc SET Data_Set='updated' WHERE CPC_ID='".$_POST["cpc_id"]."'";



      $result1 = mysqli_query($connect, $query1); 
      $result2 = mysqli_query($connect, $query2); 
	  if(!$result1 && !$result2) 
	      die("Query to show");  
	  else if ($result1 && $result2){ 
 	       $row = mysqli_fetch_assoc($result1);  
	        echo json_encode($row);       
	  }
     

    }	//else session
   
      //mysql_close($connect);
 ?>