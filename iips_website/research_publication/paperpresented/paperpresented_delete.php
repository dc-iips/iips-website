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


		$delete_ppc_id=$_POST["ppc_id"];

		$query1 = mysql_query("UPDATE `teach_ppc` SET  Data_Set='deleted' where PPC_ID='$delete_ppc_id' ");


	} //else session
?>