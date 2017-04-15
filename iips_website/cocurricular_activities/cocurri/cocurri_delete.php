<?php

    session_start();
    if(!isset($_SESSION['username']))
    {
       echo "<script>window.open('../../index.php','_self')</script>";     
    }
    else
    {
		mysql_connect('localhost','root','');
		mysql_select_db('pbas_db');


		$delete_cocurri_id=$_POST["cocurri_id"];

		$query1 = mysql_query("UPDATE `teach_cocurri` SET  Data_Set='deleted' where COCURRI_ID='$delete_cocurri_id' ");


	} //else session
?>