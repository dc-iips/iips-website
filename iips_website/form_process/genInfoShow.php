<!-- Script for showing data for "Academic Activity" -->
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
		$mobile = $row['Gen_Info_Contact'];
		$email = $row['Gen_Info_Email'];
		//$email = $row['Gen_Info_Email'];

?>				                <h3 class="text-primary"><center>Edit your profile.</center></h3>								                
								<label>Name(in Block Letters)</label> 
						    		<input type="text" class="form-control required" name="name"  value="<?php echo $uname; ?>" required="required">
		                  		<br><label>Father's Name</label>
						    		<input type="text" class="form-control required" name="fatherName" title="Please Enter Your Father's Name " value="<?php echo $fatherName; ?>" required="required"/>
				          		<br><label>Mother's Name</label>
						   		   <input type="text" class="form-control required" name="motherName" title="Please Enter Your Mother's Name" value="<?php echo $motherName; ?>" required="required"/>
				   		  		<br><label>Date Of Birth</label>
						    		<input type="text" class="form-control required" name="dob" title="Please Enter DOB " value="<?php echo $dob; ?>" required="required"/>
				      	  		<br><label>Adhar Card Number</label>
						    		<input type="text" class="form-control required" name="adharcard" title="Please Enter Your Adharcard Number" value="<?php echo $adharcard; ?>" required="required"/>
								<br><label>PAN Card Number </label>
						    	    <input type="text" class="form-control required" name="pancard" title="Please Enter Your PAN  Card Number<br>" value="<?php echo $pancard; ?>" required="required"/>
				          		<br><label>Department Name</label>
						    	    <input type="text" class="form-control required" name="department" title="Please Enter Your Department Name" value="<?php echo $department; ?>" required="required"/>
								<br><label>Highest Qualification</label> 
						    		<input type="text" class="form-control required" name="qualification" title="Please Enter Your Qualification" value="<?php echo $qualification; ?>" required="required">
		                  		<br><label>Permanent Address</label>
						    		<input type="text" class="form-control required" name="addressPermanant" title="Please Enter Your Address" value="<?php echo $address; ?>" required="required"/>
				          		<br><label>Contact No.</label>
						   		   <input type="text" class="form-control required" name="contact" title="Please Enter Your Contact No." value="<?php echo $mobile; ?>" required="required"/>
				   		  		<br><label>Email</label>
						    		<input type="email" class="form-control required" name="email" title="Please Enter Your Email" value="<?php echo $email; ?>" required="required"/><br>
						    		<button class="btn btn-md btn-primary" type="submit" name="infoSave">Save</button>
								<?php   }
							?>
<!-- End of if($name == 'activity') condition-->
