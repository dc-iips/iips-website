<?PHP
	$con = mysqli_connect('localhost','root','','Pbas_db');
	if(mysqli_connect_errno($con)){
		echo 'Failed to connect to the database : '.mysqli_connect_error();
		die();
	}

?>
