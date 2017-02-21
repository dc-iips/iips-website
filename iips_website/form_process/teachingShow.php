<?php 
    session_start();
	ob_start();
	$val=$_GET["val"];
	$name = $_GET['name'];
	$userId = $_SESSION['username'];
	$year=$_SESSION['pbasYear'];
	#Database Connection
	include('DBConnect.php');
?>

<!-- Script for showing data for "lecture/seminar" -->

<?php
	
	if($name == 'lect'){

		$sql="SELECT * FROM teach_lstp WHERE User_Id = '$userId' and year='$year' and Teach_LSTP_Course = '".$val."'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		$row = mysqli_fetch_array($result);
 		$courseName = $row['Teach_LSTP_Course'];
	    $level = $row['Teach_LSTP_Level'];
		$modes = $row['Teach_LSTP_MOT'];
		$clsAllocated = $row['Teach_LSTP_NOCA'];
		$clsConducted = $row['Teach_LSTP_NOCC'];
		$practicals = $row['Teach_LSTP_Practicals'];
		$clsPercent = $row['Teach_LSTP_CTDR'];
		$clsTaken = $row['Teach_LSTP_CTAPI'];
		$teachingLoad = $row['Teach_LSTP_TLAPI'];

?>
        <label>Course / Paper</label> 
        		   <input type="text" class="form-control required" name="courseName" value="<?php echo $courseName; ?>"/>
         <br/><label>Level</label>
				    <input type="text" class="form-control required" name="level" title="Please Enter The Level"value="<?php echo $level; ?>"/>
		 <br /><label>Mode Of Teaching</label>
				    <input type="text" class="form-control required" name="teachingModes" title="Please Enter Teaching Mode" value="<?php echo $modes; ?>"/>
		  <br /><label> No. of Classes/per Week Allocated</label>
				    <input type="text" class="form-control required" name="classAllocated" title="Please Enter No. Of Class Allocated" value="<?php echo $clsAllocated; ?>"/>
		  <br /><label>Total Number of Classes Conducted</label>
				    <input type="text" class="form-control required" name="classConducted" title="Please Enter Total No. of Conducted Classes" value="<?php echo $clsConducted; ?>"/>
		<br /><label>Practicals</label> 
				    <input type="text" class="form-control required" name="practicals" title="Please Enter Practicles" value="<?php echo $practicals; ?>">
        <br /><label>% of Classes Taken AS Per Documented Record</label>
				   <input type="text" class="form-control required" name="classTakenRecord" title="Please Enter the % value" value="<?php echo $clsPercent; ?>"/>
		<br /><label>Classes Taken (max 50 for 100% Performance and Proportionate Score upto 80% Performance, below which no Score may be given)</label>
				  <input type="text" class="form-control required" name="classTaken" title="Please Enter Classes Taken" value="<?php echo $clsTaken; ?>"/>
		 <br /><label>Teaching Load in Excess of UGC norm(max score : 10)</label>
				  <input type="text" class="form-control required" name="teachingLoads" title="Please Enter Teaching Load" value="<?php echo $teachingLoad; ?>"/>
								
	<?php   
	    }#End of If condition
		if($name == 'course'){
			$sql="SELECT * FROM teach_rimc WHERE User_Id = '$userId' and Teach_RIMC_Course = '".$val."'";
			$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
			$row = mysqli_fetch_array($result);
 			$courseName = $row['Teach_RIMC_Course'];
	    	$consulted = $row['Teach_RIMC_Consulted'];
			$prescribed = $row['Teach_RIMC_Prescribed'];
			$resources = $row['Teach_RIMC_ARP'];
	?>
	        <br /><label>Course / Paper</label>
			  <input type="text" class="form-control required" name="readingCourse" value="<?php echo $courseName; ?>">
         <br><label>Consulted</label>
			  <input type="text" class="form-control required" name="consulted" title="Please Enter value" value="<?php echo $consulted; ?>"/>
		  <br><label>Prescribed</label>
			<input type="text" class="form-control required" name="prescribed" title="Please Fill this information" value="<?php echo $prescribed; ?>"/>
		  <br><label>Additional Resources Provided : </label>
				 Yes<input type="radio" name="addiResources" onclick="document.getElementById('disappear').disabled = false;" value="Yes" />
				 No<input type="radio" name="addiResources" onclick="document.getElementById('disappear').disabled = true;" value="No"/>
				 <input type="text" class="form-control required" name="resrc" title="Please Fill this information" id="disappear" value="<?php echo $resources; ?>"/>	
				 
     <?php
	 	}#End of If condition of resources material
		
		
		if($name == 'desc'){
			$sql="SELECT * FROM teach_tlm WHERE User_Id = '$userId' and Teach_TLM_SD = '".$val."'";
			$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
			$row = mysqli_fetch_array($result);
 			$description = $row['Teach_TLM_SD'];
	    	$apiScore = $row['Teach_TLM_API'];

	 ?>
	        <br /><label>Short Description </label> 
			    <input type="text" class="form-control required" name="description" value="<?php echo $description; ?>">
            <br /><label>API Score</label>
				<input type="text" class="form-control required" name="api" title="Please Enter API Score" value="<?php echo $apiScore; ?>"/>
	 <?php
	 	}#End of If condition of Teaching Methodologies
		
		if($name == 'dut'){
			
			$sql="SELECT * FROM teach_edap WHERE User_Id = '$userId' and year='$year' and Teach_EDAP_TED = '$val'";
			$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
			$row = mysqli_fetch_array($result);
 			$dutyType = $row['Teach_EDAP_TED'];
	    	$assignedDuties = $row['Teach_EDAP_DA'];
			$carriedOut = $row['Teach_EDAP_ECO'];
			$apiScore = $row['Teach_EDAP_API'];

	 ?>
	        						<label>Type of Examination Duties</label> 
				    					<input type="text" class="form-control required" name="typeDuties" value="<?php echo $dutyType; ?>">
                  					<br><label>Duties Assigned</label>
				    					<input type="text" class="form-control required" name="assignedDuties" title="Please Enter Assigned Duties" value="<?php echo $assignedDuties; ?>"/>
									<br><label>Extent to which carried out(%)</label> 
				    					<input type="text" class="form-control required" name="extent" title="Please Enter % Value" value="<?php echo $carriedOut; ?>">
                  					<br><label>API Score</label>
				    					<input type="text" class="form-control required" name="api" title="Please Enter API Score" value="<?php echo $apiScore; ?>"/>
	<?php
	   }
	
	 ?>
<!-- End of if($name == 'activity') condition-->
