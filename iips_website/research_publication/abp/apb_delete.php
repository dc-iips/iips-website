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


		$delete_apb_id=$_POST["apb_id"];

		$query1 = mysql_query("UPDATE `teach_apb` SET  Data_Set='deleted' where CPC_ID='$delete_apb_id' ");


	} //else session
?>