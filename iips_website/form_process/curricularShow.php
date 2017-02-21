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
<!-- Script for showing data for "curricular" -->

<?php
	if($name == 'curr'){
		$sql="SELECT * FROM teach_ecfa WHERE User_Id = '$userId' and year='$year' and Teach_ECFA_TOA = '".$val."'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		$row = mysqli_fetch_array($result);
 		$type = $row['Teach_ECFA_TOA'];
	    $avgHours = $row['Teach_ECFA_AH'];
		$apiScore = $row['Teach_ECFA_API'];
?>
	      <br/> <label>Type of Activity</label> <br/>
				<input type="text" class="form-control required" name="typeOfActivity" value="<?php echo $type; ?>"/>
           <br/><label>Average Hrs/Week</label>
				<input type="text" class="form-control required" name="average" title="Please Enter Average Hrs/Week" value="<?php echo $avgHours; ?>"/>
		   <br/><label>API Score</label>
			<input type="text" class="form-control required" name="api" title="Please Enter API Score" value="<?php echo $apiScore; ?>"/><br>
	
 <?php
	 	}#End of if condition for Curricular activity
		
	if($name == 'contr'){
		$sql="SELECT * FROM teach_clmi WHERE User_Id = '$userId' and year='$year' and Teach_CLMI_TOA = '".$val."'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		$row = mysqli_fetch_array($result);
 		$type = $row['Teach_CLMI_TOA'];
	    $responsibility = $row['Teach_CLMI_YSR'];
		$apiScore = $row['Teach_CLMI_API'];	
 ?>
 		<br/><label>Type of Activity</label> <br/>
 			<input type="text" class="form-control required" name="typeOfActivity" title="Please Enter Type" value="<?php echo $type; ?>"/>
        	<br/><label>Yearly/Semester wise responsibility</label>
			<input type="text" class="form-control required" name="responsibility" title="Please Enter Responsibility" value="<?php echo $responsibility; ?>"/>
		 <br><label>API Score</label>
			<input type="text" class="form-control required" name="contApi" title="Please Enter API Score" value="<?php echo $apiScore; ?>"/><br>
 <?php
 	}#End of if condition for Contribution 
	
	if($name == 'dev'){
		$sql="SELECT * FROM teach_pda WHERE User_Id = '$userId' and year='$year' and Teach_PDA_TOA = '".$val."'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		$row = mysqli_fetch_array($result);
 		$type = $row['Teach_PDA_TOA'];
	    $responsibility = $row['Teach_PDA_YWR'];
		$apiScore = $row['Teach_PDA_API'];	
?>
 		<br/><label>Type of Activity</label> 
 				<input type="text" class="form-control required" name="typeOfActivity" value="<?php echo $type; ?>"/>	
         <br/><label>Yearly/Semester wise responsibility</label>
				<input type="text" class="form-control required" name="responsibility" title="Please Enter The Responsibility" value="<?php echo $responsibility; ?>"/>
		 <br><label>API Score</label>
			  <input type="text" class="form-control required" name="devApi" title="Please Enter API Score" value="<?php echo $apiScore; ?>"/><br>
 <?php
 	}#End of if condition for Development
 ?>