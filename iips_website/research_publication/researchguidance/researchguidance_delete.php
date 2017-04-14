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


		$delete_rg_id=$_POST["rg_id"];

		$query1 = mysql_query("UPDATE `teach_rg` SET  Data_Set='deleted' where RG_ID='$delete_rg_id' ");


	} //else session
?>