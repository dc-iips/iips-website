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


		$delete_ppij_id=$_POST["ppij_id"];

		$query1 = mysql_query("UPDATE `teach_ppij` SET  Data_Set='deleted' where PPIJ_ID='$delete_ppij_id' ");

	} //else session
?>