<?php
// Php Script - Updating information for Other Activities
	if(isset($_POST['otherSave'])){
		$user_id = $_SESSION['username'];
		$details = $_POST['actDetails'];
		
		//Query for Updating Other Activities
		$sql1 = "SELECT * FROM orie where User_Id='$user_id' and Details='$details'";
		$result = mysqli_query($con, $sql1);
		$row = mysqli_fetch_array($result);
		if(!empty($row['User_Id']) and !empty($row['Details'])){
				header('location:otherInfo.php');
		}
 		else{
			$insertQuery = "Insert Into orie values('$user_id','','','$details')";
			$result2 = mysqli_query($con,$insertQuery);
			if($result2){
				header('location:otherInfo.php');
			}
			else{
				die("Insert error : ".mysqli_error($con));
			}
		}
		
	}
	
	#Query For Deleting Records from Teach_edap Table
	if(isset($_POST['otherDelete'])){
		$user_id = $_SESSION['username'];
		$details = $_POST['actDetails'];
		
		$deleteQuery = "Delete From orie where User_Id='$user_id' and Details='$details'";
		$result = mysqli_query($con,$deleteQuery);
		if($result){
			header('location:otherInfo.php');
		}
		else{
			die("Error : ".mysqli_error($con) );
		}
	}
	
// Php Script - Updating information for Enclosures
	if(isset($_POST['enclosureSave'])){
		$user_id = $_SESSION['username'];
		$enclosure = $_POST['encDetails'];
		
		//Query for Updating Other Activities
		$sql1 = "SELECT * FROM enclosures where User_Id='$user_id' and Enclosure='$enclosure";
		$result = mysqli_query($con, $sql1);
		$row = mysqli_fetch_array($result);
		if(!empty($row['User_Id']) and !empty($row['Enclosure'])){
				header('location:otherInfo.php');
		}
 		else{
			$insertQuery = "Insert Into enclosures values('$user_id','','','$enclosure')";
			$result2 = mysqli_query($con,$insertQuery);
			if($result2){
				header('location:otherInfo.php');
			}
			else{
				die("Insert error : ".mysqli_error($con));
			}
		}
		
	}
	
	#Query For Deleting Records from Teach_edap Table
	if(isset($_POST['enclosureDelete'])){
		$user_id = $_SESSION['username'];
		$enclosure = $_POST['encDetails'];
		
		$deleteQuery = "Delete From enclosures where User_Id='$user_id' and Enclosure='$enclosure'";
		$result = mysqli_query($con,$deleteQuery);
		if($result){
			header('location:otherInfo.php');
		}
		else{
			die("Error : ".mysqli_error($con) );
		}
	}
?>
