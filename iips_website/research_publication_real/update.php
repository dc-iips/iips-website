<?php
mysql_connect('localhost','root','');
mysql_select_db('pbas_db');

$delete_ppij_id= $_REQUEST['up'];

//Make Date_Set invalid
$query1 = mysql_query("UPDATE `teach_ppij` SET  Data_Set='updated' where PPIJ_ID='$delete_ppij_id' ");

//Make a new entry of updated data with new ppij_id'
include "ppij_insert_db.php";

?>