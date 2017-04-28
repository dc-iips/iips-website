<?php

    session_start();
    if(!isset($_SESSION['username']))
    {
       echo "<script>window.open('../index.php','_self')</script>";     
    }
    else
    {
		mysql_connect('localhost','root','');
		mysql_select_db('pbas_db');


		$delete_cpc_id=$_POST["cpc_id"];

		$query1 = mysql_query("UPDATE `teach_cpc` SET  Data_Set='deleted' where CPC_ID='$delete_cpc_id' ");


	} //else session
?>