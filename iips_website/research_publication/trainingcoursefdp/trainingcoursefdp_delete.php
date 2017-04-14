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


		$delete_fdp_id=$_POST["fdp_id"];

		$query1 = mysql_query("UPDATE `teach_fdp` SET  Data_Set='deleted' where FDP_ID='$delete_fdp_id' ");


	} //else session
?>