<?php
	$conn = mysqli_connect('localhost','root','','pbas_db');
	if(mysqli_connect_errno($conn)){
		echo 'Failed to connect to the database : '.mysqli_connect_error();
		die();
	}

?>
