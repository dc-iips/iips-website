<?php
	#Database connection
	include('DBconnect.php');
	if(isset($_SESSION['username']))
	{	
		$uname=$_SESSION['username'];
		$sql= "SELECT * from Gen_Info where user_Id='$uname'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result);
	}
?>
<?php
	if(isset($_POST['infoSave']))
	{
		$user_id = $_SESSION['username'];
		$Name = $_POST['name'];
		$fatherName = $_POST['fatherName'];
		$motherName = $_POST['motherName'];
		$department = $_POST['department'];
		$designation = $_POST['designation'];
		$gradePay = $_POST['gradePay'];
		$lastPromotion = $_POST['lastPromotion'];
		$addressCorrespondece = $_POST['addressCorrespondece'];
		$addressPermanant = $_POST['addressPermanant'];
		$telePhone = $_POST['telePhone'];
		$email = $_POST['email'];
		//Query for Updating general inforamtion
		if(!empty($row['User_Id']) and !empty($row['Gen_Info_Name']))
		{

		$updateQuery = $sql = "UPDATE Gen_Info SET Gen_Info_Name='$Name', Gen_Info_Fname='$fatherName' , Gen_Info_Mname='$motherName', Gen_Info_Department='$department', Gen_Info_CD='$designation', Gen_Info_GP='$gradePay', Gen_Info_DLP='$lastPromotion', Gen_Info_AFC='$addressCorrespondece', Gen_Info_PA='$addressPermanant', Gen_Info_TNO='$telePhone', Gen_Info_Email='$email' WHERE User_Id='$user_id' " ;
		$result1 = mysqli_query($conn,$updateQuery) or die("erro  : ".mysqli_error($conn)); 
		if($result1){
			unset($_POST['info_save']);
			$_SESSION['infoUpdated'] = "<h5 align='center' >Information Updated Successfully ! ";
			header('location:Profiles1.php');
		}
		else{
			die("error : ".mysqli_error($conn));
		}
	    }
	else{
			$insertQuery = "Insert Into Gen_Info values('$user_id','$Name','$fatherName','$motherName','$department','$designation','$gradePay','$lastPromotion','$addressCorrespondece','$addressPermanant','$telePhone','$email')";
			$result2 = mysqli_query($conn,$insertQuery);
			if($result2){
				header('location:Profiles1.php');
			}
			else{
				die("error : ".mysqli_error($conn));
			}
		}
	}
?>
