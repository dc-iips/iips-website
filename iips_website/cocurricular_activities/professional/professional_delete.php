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

		$delete_professional_id=$_POST["professional_id"];

		$query1 = mysql_query("UPDATE `teach_pda` SET  Data_Set='deleted' where PROFESSIONAL_ID='$delete_professional_id' ");

	} //else session
?>