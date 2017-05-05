<?php
	#Database connection
	include('DBconnect.php');
	if(isset($_SESSION['username']))
	{	
		$uname=$_SESSION['username'];
		$sql= "SELECT * from Gen_Info where User_Id='$uname'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result);
	}
?>
<?php
	if(isset($_POST['infoSave']))
	{
		$user_id = $_SESSION['username'];
		//$Name = $_POST['name'];
		$fatherName = $_POST['fatherName'];
		$motherName = $_POST['motherName'];
		$dob = $_POST['dob'];
		$adharcard = $_POST['adharcard'];
		$pancard = $_POST['pan'];
		$department = $_POST['department'];
		$qualification = $_POST['qualification'];
		$address = $_POST['address'];
		$mobile = $_POST['contact'];
		$email = $_POST['email'];
		//Query for Updating general inforamtion
		if(!empty($row['User_Id']))
		{

		$updateQuery = $sql = "UPDATE Gen_Info SET  Gen_Info_Fname='$fatherName' , Gen_Info_Mname='$motherName', Gen_Info_DOB='$dob', Gen_Info_Adhar='$adharcard', Gen_Info_PAN='$pancard', Gen_Info_Department='$department', Gen_Info_Qualification='$qualification', Gen_Info_Address='$address', Gen_Info_Mobile='$mobile', Gen_Info_Email='$email' WHERE User_Id='$user_id' " ;
		$result1 = mysqli_query($conn,$updateQuery) or die("erro  : ".mysqli_error($conn)); 
		if($result1){
			unset($_POST['info_save']);
			$_SESSION['infoUpdated'] = "<h5 align='center' >Information Updated Successfully ! ";
			header('location:profile.php');
		}
		else{
			die("error : ".mysqli_error($conn));
		}
	}
	else{
			$insertQuery = "Insert Into Gen_Info values('$user_id','$fatherName','$motherName','$department','$qualification','$adharcard','$pancard','$dob','$address','$mobile','$email')";
			$result2 = mysqli_query($conn,$insertQuery);
			if($result2){
				header('location:profile.php');
			}
			else{
				die("error : ".mysqli_error($conn));
			}
		}
	}
?>
