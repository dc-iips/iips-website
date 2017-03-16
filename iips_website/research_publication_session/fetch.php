 <?php  
 //fetch.php  
// header('Content-Type: application/json; charset=utf-8');
 $connect = mysqli_connect("localhost", "root", "", "pbas_db");  
  
      
      $query = "SELECT * FROM teach_ppij where PPIJ_ID='".$_POST["ppij_id"]."' ";  

      $result = mysqli_query($connect, $query);  
	  if(!$result) 
    		die("Query to show");  
	  else{ 
     		 $row = mysqli_fetch_assoc($result);  
     		 echo json_encode($row);  
         }
    //mysql_close($connect);
 ?>