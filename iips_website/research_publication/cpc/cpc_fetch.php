 <?php  

    session_start();
    if(!isset($_SESSION['username']))
    {
       echo "<script>window.open('../index.php','_self')</script>";     
    }
    else
    {
        $connect = mysqli_connect("localhost", "root", "", "pbas_db");   
     
        $query = "SELECT * FROM teach_cpc where CPC_ID='".$_POST["cpc_id"]."'";  

        $result = mysqli_query($connect, $query);  
	      if(!$result) 
	          die("Query to show");  
	      else
        { 
 	          $row = mysqli_fetch_assoc($result);  
	          echo json_encode($row);       
	      }
    }	//else session
   
      //mysql_close($connect);
 ?>