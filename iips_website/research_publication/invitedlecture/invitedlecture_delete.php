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


		$delete_ilc_id=$_POST["ilc_id"];

		$query1 = mysql_query("UPDATE `teach_ilc` SET  Data_Set='deleted' where ILC_ID='$delete_ilc_id' ");


	} //else session
?>