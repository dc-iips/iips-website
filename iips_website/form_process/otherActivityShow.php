<?php 
    session_start();
	ob_start();
	$val=$_GET["val"];
	$name = $_GET['name'];
	$userId = $_SESSION['username'];
	#Database Connection
	include('DBConnect.php');
?>
<!-- Script for showing data for "Other Activity" -->

<?php
	if($name == 'oth'){
		$sql="SELECT * FROM orie WHERE User_Id = '$userId' and Details = '".$val."'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		$row = mysqli_fetch_array($result);
 		$details = $row['Details'];
?>
	     <label>Details</label> 
			<input type="text" class="form-control" name="actDetails" title="Please Enter The Details" value="<?php echo $details; ?>"><br>

<?php
	}# End of other Activity show.
	
	if($name == 'enc'){
		$sql="SELECT * FROM enclosures WHERE User_Id = '$userId' and Enclosure = '".$val."'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		$row = mysqli_fetch_array($result);
 		$enclosures = $row['Enclosure'];
?>
        <label>Enclosures</label>
		<input type="text" class="form-control" name="encDetails" title="Please Enter The Enclosures" value="<?php echo $enclosures; ?>"><br>
		
<?php
	}
?>