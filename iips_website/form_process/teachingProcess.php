
<?php
	if(isset($_POST['lectSave'])){
		$user_id = $_SESSION['username'];
		$year=$_SESSION['pbasYear'];
		$courseName = $_POST['course'];
	    $level = $_POST['level'];
		$modes = $_POST['teachingModes'];
		$clsAllocated = $_POST['classAllocated'];
		$clsConducted = $_POST['classConducted'];
		$practicals = $_POST['practicals'];
		$clsPercent = $_POST['classTakenRecord'];
		$clsTaken = $_POST['classTaken'];
		$teachingLoad = $_POST['teachingLoads'];
		
		//Query for Updating Lecture/Seminar Information
		$sql1 = "SELECT * FROM teach_lstp where User_Id='$user_id' and year='$year' and Teach_LSTP_Course='$courseName'";
		$result = mysqli_query($con, $sql1);
		$row = mysqli_fetch_array($result);
		if(!empty($row['User_Id']) and !empty($row['Teach_LSTP_Course'])){
			$updateQuery = "UPDATE teach_lstp SET Teach_LSTP_Level='$level', Teach_LSTP_MOT='$modes', Teach_LSTP_NOCA='$clsAllocated', Teach_LSTP_NOCC='$clsConducted', Teach_LSTP_Practicals='$practicals', Teach_LSTP_CTDR='$clsPercent',Teach_LSTP_CTAPI='$clsTaken',Teach_LSTP_TLAPI='$teachingLoad' where User_Id='$user_id' and Teach_LSTP_Course='$courseName'" ;
			$result1 = mysqli_query($con,$updateQuery);
			if($result1){
				header('location:teachingLearningActivities.php');
			}
			else{
				die("Update error : ".mysqli_error($con));
			}
		}
 		else{
			$insertQuery = "Insert Into teach_lstp values('$user_id','$year','$courseName','$level','$modes','$clsAllocated','$clsConducted','$practicals','$clsPercent','$clsTaken','$teachingLoad')";
			$result2 = mysqli_query($con,$insertQuery);
			if($result2){
				header('location:teachingLearningActivities.php');
			}
			else{
				die("Insert error : ".mysqli_error($con));
			}
		}
		
	}
	
	#Query For Deleting Records from Acad_act Table
	if(isset($_POST['lectDelete'])){
		$user_id = $_SESSION['username'];
		$courseName = $_POST['courseName'];
	    $level = $_POST['level'];
		$modes = $_POST['teachingModes'];
		$clsAllocated = $_POST['classAllocated'];
		$clsConducted = $_POST['classConducted'];
		$practicals = $_POST['practicals'];
		$clsPercent = $_POST['classTakenRecord'];
		$clsTaken = $_POST['classTaken'];
		$teachingLoad = $_POST['teachingLoads'];
		$year=$_SESSION['pbasYear'];
		$deleteQuery = "DELETE FROM teach_lstp WHERE User_Id='$user_id' AND year='$year' AND Teach_LSTP_Course='$courseName'";
		$result = mysqli_query($con,$deleteQuery);
		if($result){
			header('location:teachingLearningActivities.php');
		}
		else{
			die("Error : ".mysqli_error($con) );
		}
	}
	
// Php Script For Updating information for Reading/Instructional Material
	if(isset($_POST['resourceSave'])){
		$user_id = $_SESSION['username'];
		$readingCourse = $_POST['readingCourse'];
	    $consulted = $_POST['consulted'];
		$prescribed = $_POST['prescribed'];
		$resources = $_POST['resrc'];
		$year=$_SESSION['pbasYear'];
		//Query for Updating Reading Material
		$sql1 = "SELECT * FROM teach_rimc where User_Id='$user_id' and year='$year' and Teach_RIMC_Course='$readingCourse'";
		$result = mysqli_query($con, $sql1);
		$row = mysqli_fetch_array($result);
		if(!empty($row['User_Id']) and !empty($row['Teach_RIMC_Course'])){
			$updateQuery = "UPDATE teach_rimc SET Teach_RIMC_Consulted='$consulted', Teach_RIMC_Prescribed='$prescribed', Teach_RIMC_ARP='$resources' where User_Id='$user_id' and Teach_RIMC_Course='$readingCourse'" ;
			$result1 = mysqli_query($con,$updateQuery);
			if($result1){
				header('location:rimc.php');
			}
			else{
				die("Update error : ".mysqli_error($con));
			}
		}
 		else{
			$insertQuery = "Insert Into teach_rimc values('$user_id','$year','$readingCourse','$consulted','$prescribed','$resources')";
			$result2 = mysqli_query($con,$insertQuery);
			if($result2){
				header('location:rimc.php');
			}
			else{
				die("Insert error : ".mysqli_error($con));
			}
		}
		
	}
	
	#Query For Deleting Records from Reading Material
	if(isset($_POST['resourceDelete'])){
		$user_id = $_SESSION['username'];
		$readingCourse = $_POST['readingCourse'];
	    $consulted = $_POST['consulted'];
		$prescribed = $_POST['prescribed'];
		$resources = $_POST['resrc'];
		$year=$_SESSION['pbasYear'];
		$deleteQuery = "Delete From teach_rimc where User_Id='$user_id'and year='$year' and Teach_RIMC_Course='$readingCourse'";
		$result = mysqli_query($con,$deleteQuery);
		if($result){
			header('location:rimc.php');
		}
		else{
			die("Error : ".mysqli_error($con) );
		}
	}
	
// Php Script For Updating information for Teaching-Learning Methodologies Tab
	if(isset($_POST['innovationSave'])){
		$user_id = $_SESSION['username'];
		$description = $_POST['description'];
	    $apiScore = $_POST['api'];
		$year=$_SESSION['pbasYear'];
		//Query for Updating Teaching-Learning Methodologies
		$sql1 = "SELECT * FROM teach_tlm where User_Id='$user_id' and Teach_TLM_SD='$description'";
		$result = mysqli_query($con, $sql1);
		$row = mysqli_fetch_array($result);
		if(!empty($row['User_Id']) and !empty($row['Teach_TLM_SD'])){
			$updateQuery = "UPDATE teach_tlm SET Teach_TLM_API='$apiScore' where User_Id='$user_id' and year='$year' and Teach_TLM_SD='$description'" ;
			$result1 = mysqli_query($con,$updateQuery);
			if($result1){
				header('location:tlm.php');
			}
			else{
				die("Update error : ".mysqli_error($con));
			}
		}
 		else{
			$insertQuery = "Insert Into teach_tlm values('$user_id','$year','$description','$apiScore')";
			$result2 = mysqli_query($con,$insertQuery);
			if($result2){
				header('location:tlm.php');
			}
			else{
				die("Insert error : ".mysqli_error($con));
			}
		}
		
	}
	
	#Query For Deleting Records from teach_tlm Table
	if(isset($_POST['innovationDelete'])){
		$user_id = $_SESSION['username'];
		$description = $_POST['description'];
	    $apiScore = $_POST['api'];
		
		$deleteQuery = "Delete From teach_tlm where User_Id='$user_id' and Teach_TLM_SD='$description'";
		$result = mysqli_query($con,$deleteQuery);
		if($result){
			header('location:tlm.php');
		}
		else{
			die("Error : ".mysqli_error($con) );
		}
	}
	
// Php Script - Updating information for Examination Duties Assigned and Performed
	if(isset($_POST['dutiesSave'])){
		$user_id = $_SESSION['username'];
		$year=$_SESSION['pbasYear'];
		$type = $_POST['typeDuties'];
		$assigned = $_POST['assignedDuties'];
		$extent = $_POST['extent'];
	    $apiScore = $_POST['api'];
		
		//Query for Updating Examination Duties Assigned and Performed
		$sql1 = "SELECT * FROM teach_edap where User_Id='$user_id' and year='$year' and Teach_EDAP_TED='$type'";
		$result = mysqli_query($con, $sql1);
		$row = mysqli_fetch_array($result);
		if(!empty($row['User_Id']) and !empty($row['Teach_EDAP_TED'])){
			$updateQuery = "UPDATE teach_edap SET Teach_EDAP_DA='$assigned', Teach_EDAP_ECO='$extent', Teach_EDAP_API='$apiScore' where User_Id='$user_id' and year='$year' and Teach_EDAP_TED='$type'" ;
			$result1 = mysqli_query($con,$updateQuery);
			if($result1){
				header('location:edap.php');
			}
			else{
				die("Update error : ".mysqli_error($con));
			}
		}
 		else{
			$insertQuery = "Insert Into teach_edap values('$user_id','$year','$type','$assigned','$extent','$apiScore')";
			$result2 = mysqli_query($con,$insertQuery);
			if($result2){
				header('location:edap.php');
			}
			else{
				die("Insert error : ".mysqli_error($con));
			}
		}
		
	}
	
	#Query For Deleting Records from Teach_edap Table
	if(isset($_POST['dutiesDelete'])){
		$user_id = $_SESSION['username'];
		$year=$_SESSION['pbasYear'];
		$type = $_POST['typeDuties'];
		$assigned = $_POST['assignedDuties'];
		$extent = $_POST['extent'];
	    $apiScore = $_POST['api'];
		
		$deleteQuery = "Delete From teach_edap where User_Id='$user_id' and year='$year' and Teach_EDAP_TED='$type'";
		$result = mysqli_query($con,$deleteQuery);
		if($result){
			header('location:edap.php');
		}
		else{
			die("Error : ".mysqli_error($con) );
		}
	}
?>