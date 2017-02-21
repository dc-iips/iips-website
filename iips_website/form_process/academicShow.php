<?php 
	session_start();
	ob_start();
	$userId = $_SESSION['username'];
	$year=$_SESSION['pbasYear'];
	$val=$_GET["val"];
	$name = $_GET['name'];
	#Database Connection
	include('DBConnect.php');
?>

<!-- Script for showing data for "Academic Activity" -->

<?php
	
	if($name == 'activity'){
		$sql="SELECT * FROM acad_act WHERE User_ID = '$userId' and year='$year' and Gen_Info_Noc = '$val'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		$row = mysqli_fetch_array($result);
		$aq = $row['Gen_Info_AQ'];
 		$courseName = $row['Gen_Info_Noc'];
	    $acPlace = $row['Gen_Info_Place'];
		$acDuration = $row['Gen_Info_Duration'];
		$sponsorAgency = $row['Gen_Info_SA'];
		$aqyear = $row['Gen_Info_Aqyear'];
		$asc = $row['Gen_Info_ASC'];

?>
        <label>Whether acquired any degree or fresh academic
 qualification during the year : </label>
 							<?php if($aq == "yes"){
							?>
				    		Yes<input type="radio" name="degree" id="optionsRadios1" value="yes" <?php echo "checked" ?>>
						    No<input type="radio" name="degree" id="optionsRadios2" value="no"><br><br>
							<?php 
							   }
							   else{ 
							?>
							   		Yes<input type="radio" name="degree" id="optionsRadios1" value="yes" >
						    No<input type="radio" name="degree" id="optionsRadios2" value="no" <?php echo "checked" ?>><br><br>
							 <?php   }
							?>
                  			<label>Name Of Course</label>
				    			<input type="text" class="form-control required" name="nameOfCourse" title="Please Enter Course Name" value="<?php echo $courseName; ?>"/>
		          			<br /><label>Place</label>
				   		   		<input type="text" class="form-control required" name="Place" title="Please Enter Place" value="<?php echo $acPlace; ?>"/>
		      	  			<br /><label>Duration</label>
				    			<input type="text" class="form-control required" name="duration" title="Please Enter Duration" value="<?php echo $acDuration; ?>"/>
							<br /><label>Sponsoring Agency</label>
				    	    	<input type="text" class="form-control required" name="sponsor" title="Please Enter Name of Sponsoring Agency" value="<?php echo $sponsorAgency; ?>"/>
		          			<br /><label>Year</label>
				    	    	<input type="text" class="form-control required date" name="Year" title="Please Enter The Date" value="<?php echo $aqyear; ?>"/>
							<br /><label>Academic Staff College Orientation / Refresher
Course Attended During The Year : </label> 
							<?php if($asc == "yes"){
							?>
				    			Yes<input type="radio" name="course" id="optionsRadios1" value="yes" <?php echo "checked" ?>>
								No<input type="radio" name="course" id="optionsRadios2" value="no"><br><br>
							<?php 
							   }
							   else{ 
							?>
								Yes<input type="radio" name="course" id="optionsRadios1" value="yes">
								No<input type="radio" name="course" id="optionsRadios2" value="no"  <?php echo "checked" ?>><br><br>
								<?php   }
							?>
							
<?php
		
  }
?>
<!-- End of if($name == 'activity') condition-->