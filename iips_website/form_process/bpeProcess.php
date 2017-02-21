<?php
	if(isset($_POST['bps_Save'])){
		$user_id = $_SESSION['username'];
		$degree = $_POST[''];
		$bpetpn = $_POST['BPE_TPN'];
		$bpetba = $_POST['BPE_TBA'];
		$pbepissn = $_POST['BPE_PISSN'];
		$pewpr = $_POST['PE_WPR'];
		$bpenoc = $_POST['BPE_NOC'];
		$Year = $_POST['course'];
		
		//Query for Updateing Academic Activity
		$sql1 = "SELECT * FROM acad_act where User_Id='$user_id' and Gen_Info_Noc='$nameOfCourse'";
		$result = mysqli_query($con, $sql1);
		$row = mysqli_fetch_array($result);
		if(!empty($row['User_Id']) and !empty($row['Gen_Info_Noc'])){
			$updateQuery = "UPDATE acad_act SET Gen_Info_AQ='$degree', Gen_Info_Place='$place', Gen_Info_Duration='$duration', Gen_Info_SA='$sponsor', Gen_Info_Aqyear='$Year', Gen_Info_ASC='$course' where User_Id='$user_id' and Gen_Info_Noc='$nameOfCourse'" ;
			$result1 = mysqli_query($con,$updateQuery);
			if($result1){
				header('location:academicActivity.php');
			}
			else{
				die("error : ".mysqli_error($con));
			}
		}
 		else{
			$insertQuery = "Insert Into acad_act values('$user_id','','$degree','$nameOfCourse','$place','$duration','$sponsor','$Year','$course')";
			$result2 = mysqli_query($con,$insertQuery);
			if($result2){
				header('location:academicActivity.php');
			}
			else{
				die("error : ".mysqli_error($con));
			}
		}
		
	}
	
	#Query For Deleting Records from Acad_act Table
	if(isset($_POST['activityDelete'])){
		$user_id = $_SESSION['username'];
		$degree = $_POST['degree'];
		$nameOfCourse = $_POST['nameOfCourse'];
		$place = $_POST['Place'];
		$duration = $_POST['duration'];
		$sponsor = $_POST['sponsor'];
		$Year = $_POST['Year'];
		$course = $_POST['course'];
		
		$deleteQuery = "Delete From acad_act where User_Id='$user_id' and Gen_Info_Noc='$nameOfCourse'";
		$result = mysqli_query($con,$deleteQuery);
		if($result){
			header('location:academicActivity.php');
		}
		else{
			die("Error : ".mysqli_error($con) );
		}
	}
?>