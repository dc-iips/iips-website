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

		$delete_corporate_id=$_POST["corporate_id"];

		$query1 = mysql_query("UPDATE `teach_clmi` SET  Data_Set='deleted' where CORPORATE_ID='$delete_corporate_id' ");

	} //else session
?>