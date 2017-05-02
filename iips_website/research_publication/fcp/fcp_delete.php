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


		$delete_fcp_id=$_POST["fcp_id"];

		$query1 = mysql_query("UPDATE `teach_fcp` SET  Data_Set='deleted' where fcp_id='$delete_fcp_id' ");


	} //else session
?>