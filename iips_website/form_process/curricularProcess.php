<?php
// Php Script - Updating information for Examination Duties Assigned and Performed
	if(isset($_POST['curricularSave'])){
		$user_id = $_SESSION['username'];
		$type = $_POST['typeOfActivity'];
		$averageHrs = $_POST['average'];
	    $apiScore = $_POST['api'];
	    $year=$_SESSION['pbasYear'];
		
		//Query for Updating Examination Duties Assigned and Performed
		$sql1 = "SELECT * FROM teach_ecfa where User_Id='$user_id'and year='$year' and Teach_ECFA_TOA='$type'";
		$result = mysqli_query($con, $sql1);
		$row = mysqli_fetch_array($result);
		if(!empty($row['User_Id']) and !empty($row['Teach_ECFA_TOA'])){
			$updateQuery = "UPDATE teach_ecfa SET Teach_ECFA_AH='$averageHrs', Teach_ECFA_API='$apiScore' where year='$year' and User_Id='$user_id' and Teach_ECFA_TOA='$type'" ;
			$result1 = mysqli_query($con,$updateQuery);
			if($result1){
				header('location:professionalDevelopmentActivity.php');
			}
			else{
				die("Update error : ".mysqli_error($con));
			}
		}
 		else{
			$insertQuery = "Insert Into teach_ecfa values('$user_id','$year','$type','$averageHrs','$apiScore')";
			$result2 = mysqli_query($con,$insertQuery);
			if($result2){
				header('location:professionalDevelopmentActivity.php');
			}
			else{
				die("Insert error : ".mysqli_error($con));
			}
		}
		
	}
	
	#Query For Deleting Records from Teach_edap Table
	if(isset($_POST['curricularDelete'])){
		$user_id = $_SESSION['username'];
		$type = $_POST['typeOfActivity'];
		$averageHrs = $_POST['average'];
	    $apiScore = $_POST['api'];
		$year=$_SESSION['pbasYear'];
		$deleteQuery = "Delete From teach_ecfa where User_Id='$user_id' and year='$year' and Teach_ECFA_TOA='$type'";
		$result = mysqli_query($con,$deleteQuery);
		if($result){
			header('location:professionalDevelopmentActivity.php');
		}
		else{
			die("Error : ".mysqli_error($con) );
		}
	}
	
// Php Script - Updating information for Examination Duties Assigned and Performed
	if(isset($_POST['contributionSave'])){
		$user_id = $_SESSION['username'];
		$type = $_POST['typeOfActivity'];
		$responsibility = $_POST['responsibility'];
	    $apiScore = $_POST['contApi'];
		echo $year=$_SESSION['pbasYear'];
		//Query for Updating Examination Duties Assigned and Performed
		$sql1 = "SELECT * FROM teach_clmi where User_Id='$user_id' and year='$year' and Teach_CLMI_TOA='$type'";
		$result = mysqli_query($con, $sql1);
		$row = mysqli_fetch_array($result);

		if(!empty($row['User_Id']) and !empty($row['Teach_CLMI_TOA'])){
			$updateQuery = "UPDATE teach_clmi SET Teach_CLMI_YSR='$responsibility', Teach_CLMI_API='$apiScore' where year='$year' and User_Id='$user_id' and Teach_CLMI_TOA='$type'" ;
			$result1 = mysqli_query($con,$updateQuery);
			if($result1){
				header('location:clmi.php');
			}
			else{
				die("Update error : ".mysqli_error($con));
			}
		}
 		else{
			$insertQuery = "Insert Into teach_clmi values('$user_id','$year','$type','$responsibility','$apiScore')";
			$result2 = mysqli_query($con,$insertQuery);
			if($result2){
				header('location:clmi.php');
			}
			else{
				die("Insert error : ".mysqli_error($con));
			}
		}
		
	}
	
	#Query For Deleting Records from Teach_edap Table
	if(isset($_POST['contributionDelete'])){
		$user_id = $_SESSION['username'];
		$type = $_POST['typeOfActivity'];
		$averageHrs = $_POST['average'];
	    $apiScore = $_POST['api'];
		$year=$_SESSION['pbasYear'];
		$deleteQuery = "Delete From teach_clmi where User_Id='$user_id' and year='$year' and Teach_CLMI_TOA='$type'";
		$result = mysqli_query($con,$deleteQuery);
		if($result){
			header('location:clmi.php');
		}
		else{
			die("Error : ".mysqli_error($con) );
		}
	}
	
// Php Script - Updating information for Examination Duties Assigned and Performed
	if(isset($_POST['developmentSave'])){
		$user_id = $_SESSION['username'];
		$type = $_POST['typeOfActivity'];
		$responsibility = $_POST['responsibility'];
	    $apiScore = $_POST['devApi'];
		$year=$_SESSION['pbasYear'];
		//Query for Updating Examination Duties Assigned and Performed
		$sql1 = "SELECT * FROM teach_pda where User_Id='$user_id' and year='$year' and Teach_PDA_TOA='$type'";
		$result = mysqli_query($con, $sql1);
		$row = mysqli_fetch_array($result);
		if(!empty($row['User_Id']) and !empty($row['Teach_PDA_TOA'])){
			$updateQuery = "UPDATE teach_pda SET Teach_PDA_YWR='$responsibility', Teach_PDA_API='$apiScore' where year='$year' and User_Id='$user_id' and Teach_PDA_TOA='$type'" ;
			$result1 = mysqli_query($con,$updateQuery);
			if($result1){
				header('location:pda.php');
			}
			else{
				die("Update error : ".mysqli_error($con));
			}
		}
 		else{
			$insertQuery = "Insert Into teach_pda values('$user_id','$year','$type','$responsibility','$apiScore')";
			$result2 = mysqli_query($con,$insertQuery);
			if($result2){
				header('location:pda.php');
			}
			else{
				die("Insert error : ".mysqli_error($con));
			}
		}
		
	}
	
	#Query For Deleting Records from Teach_edap Table
	if(isset($_POST['developmentDelete'])){
		$user_id = $_SESSION['username'];
		$type = $_POST['typeOfActivity'];
		$averageHrs = $_POST['average'];
	    $apiScore = $_POST['api'];
		$year=$_SESSION['pbasYear'];
		$deleteQuery = "Delete From teach_pda where User_Id='$user_id' and year='$year' and Teach_PDA_TOA='$type'";
		$result = mysqli_query($con,$deleteQuery);
		if($result){
			header('location:pda.php');
		}
		else{
			die("Error : ".mysqli_error($con) );
		}
	}
?>