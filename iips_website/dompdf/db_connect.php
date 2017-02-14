<?php
	$host      = "localhost";
	$username  = "root";
	$password  = "";
	$db        = "pbas_db";
	mysql_connect($host, $username, $password) or die("<font color=\"darkred\"><b>Cannot connect to database!</b></font>");
	mysql_select_db($db);
?>