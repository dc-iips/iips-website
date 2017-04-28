<?php
	session_start();
	ob_start();
	$name = $_GET['name'];
	#Database Connection
	include('../DBConnect.php');
	
	if($name == 'infoEdit'){
		$sql="SELECT * FROM gen_info WHERE User_Id = '".$_SESSION['username']."'";
		$result = mysqli_query($conn,$sql) or die('Error'.mysqli_error($conn));
		$row = mysqli_fetch_array($result);
 		$uname = $row['Gen_Info_Name'];
	  	$fatherName = $row['Gen_Info_Fname'];
		$motherName = $row['Gen_Info_Mname'];
		$dob = $row['Gen_Info_DOB'];
		$adharcard = $row['Gen_Info_Adhar'];
		$pancard = $row['Gen_Info_PAN'];
		$department = $row['Gen_Info_Department'];
		$qualification = $row['Gen_Info_Qualification'];
		$address = $row['Gen_Info_Address'];
		$mobile = $row['Gen_Info_Mobile'];
		$email = $row['Gen_Info_Email'];
?>

<h3 class="text-primary"><center>Edit your profile.</center></h3>
 	<div class="container-fluid" style="margin-left:20px">
		 <div class="row">
			 <div class="col-sm-6">
			 	<br>
			 	<label>Name </label>
				<input type="text" class="form-control" name="name" style="width:93%" title="Please enter your name" value="<?php echo $uname; ?>" required="required"/>
		     </div>
				<div class="col-sm-6">
					<br>
					<label>Date Of Birth</label>
				    <input type="text" class="form-control" name="dob" style="width:93%" title="Please enter your dob" value="<?php echo $dob; ?>" required="required"/>
				</div>
		 </div>
 
		<div class="row">
			<div class="col-sm-6">
			 	<br>
			 	<label>Father's Name</label>
				<input type="text" class="form-control" name="fatherName" style="width:93%" title="Please enter alphabets only" value="<?php echo $fatherName; ?>" required="required"/>
			</div>
			<div class="col-sm-6">
					<br>
					<label>Mother's Name</label>
				<input type="text" class="form-control" name="motherName"  style="width:93%" title="Please enter alphabets only" value="<?php echo $motherName; ?>" required="required"/>  
			</div>
		</div>
    
		<div class="row">
				<div class="col-sm-6">
					<br>
					<label>AdharCard Number</label>
				<input type="" class="form-control" name="adharcard"  maxlength="12" size="12" style="width:93%" title="Please enter 12 digit Valid AdharCardNumber"  value="<?php echo $adharcard; ?>" required="required"/> 
				</div>
				<div class="col-sm-6">
					<br>
					<label>PanCard Number</label>
				<input type="text" class="form-control" name="pancard" maxlength="10" size="10" style="width:93%" title="Please enter your PanCardNumber" value="<?php echo $pancard; ?>" required="required"/>
			    </div>
		</div>

		<div class="row">
			 	<div class="col-sm-6">
			 		<br>
			 		<label>Highest Qualification</label>
					<input type="text" class="form-control" name="qualification" style="width:93%" title="Please enter Qualification" value="<?php echo $qualification; ?>" required="required"/>
			 	</div>
				<div class="col-sm-6">
					<br><label>Department Name</label>
				<input type="text" class="form-control" name="department" style="width:93%" title="Please enter your Department" value="<?php echo $department; ?>" required="required"/>	  
				</div>
		</div>
	
	 	<div class="row">
		 	<div class="col-sm-6">
			 	<br>
			 	<label>Email</label>
				<input type="text" class="form-control" name="email"  style="width:93%" title="Please valid Email" value="<?php echo $email; ?>" required="required"/>
			</div>
			<div class="col-sm-6">
				<br><label>Contact Number</label>
				<input type="text" class="form-control" name="contact" maxlength="10" size="10" style="width:93%"  title="Please enter valid Mobile Number" value="<?php echo $mobile; ?>" required="required"/>	  
		    </div>
		</div>
	</div>
	<br>
	<label style="margin-left:20px">Permanent Address</label>
		<input type="text" class="form-control required" style="width:94%;margin-left:20px" name="address" title="Please Enter Your Address" value="<?php echo $address; ?>" required="required"/>
		<br>
		<button class="btn btn-md btn-primary" type="submit" name="infoSave">Save</button>
<?php   } //this is if closing "}"
?>
<!-- End of if($name == 'activity') condition-->
