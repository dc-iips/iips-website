<!-- Script for showing data for "Academic Activity" -->
<?php
	session_start();
	ob_start();
	$update_name = $_REQUEST['up'];
	//$username = $_SESSION['username'];
	#Database Connection
	include('../DBConnect.php');
	
	if($name == 'infoEdit'){
		$sql="SELECT * FROM ppij WHERE User_Id = '".$_SESSION['username']."'";
		$result = mysqli_query($conn,$sql) or die('Error'.mysqli_error($conn));
		$row = mysqli_fetch_array($result);
 		$session = $row['session'];
	    $ppij_id= $row['PPIJ_ID'];
		$ppij_tno = $row['Teach_PPIJ_TNO'];
		$ppij_journal= $row['Teach_PPIJ_Journal'];
		$ppij_isbn = $row['Teach_PPIJ_ISBN'];
		$ppij_pr = $row['Teach_PPIJ_PR'];
		$ppij_ncr = $row['Teach_PPIJ_NCA'];
		$ppij_ma = $row['Teach_PPIJ_MA'];

?>				                <h3 class="text-primary"><center>Edit your Inputs.</center></h3>								                
								<label>Name(in Block Letters)</label> 
						    		<input type="text" class="form-control required" name="session"  value="<?php echo $session; ?>" required="required">
		                  		<br><label>Father's Name</label>
						    		<input type="text" class="form-control required" name="fatherName" title="Please Enter Your Father's Name " value="<?php echo $ppij_tno; ?>" required="required"/>
				          		<br><label>Mother's Name</label>
						   		   <input type="text" class="form-control required" name="motherName" title="Please Enter Your Mother's Name" value="<?php echo $ppij_journal; ?>" required="required"/>
				   		  		<br><label>Date Of Birth</label>
						    		<input type="text" class="form-control required" name="dob" title="Please Enter DOB " value="<?php echo $ppij_isbn; ?>" required="required"/>
				      	  		<br><label>Adhar Card Number</label>
						    		<input type="text" class="form-control required" name="adharcard" title="Please Enter Your Adharcard Number" value="<?php echo $ppij_pr; ?>" required="required"/>
								<br><label>PAN Card Number </label>
						    	    <input type="text" class="form-control required" name="department" title="Please Enter Your Department Name" value="<?php echo $ppij_ncr; ?>" required="required"/>
								<br><label>Highest Qualification</label> 
						    		<input type="text" class="form-control required" name="qualification" title="Please Enter Your Qualification" value="<?php echo $ppij_ma; ?>" required="required">
		                  		<button class="btn btn-md btn-primary" type="submit" name="infoSave">Save</button>
								<?php   }
							?>
<!-- End of if($name == 'activity') condition-->
