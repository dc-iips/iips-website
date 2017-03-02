<?php
mysql_connect('localhost','root','');
mysql_select_db('pbas_db');

$delete_ppij_id= $_GET['del_ppij_id'];
//$delete_id =$_GET['del'];

//$query= "delete from teach_ppij where id='$delete_id'";
$ppij_id = "SELECT max(PPIJ_ID)+1 from `teach_ppij` ";

$query = "UPDATE `teach_ppij` SET  Data_Set='invalid', PPIJ_ID='$ppij_id' where PPIJ_ID='$delete_ppij_id' ";

if (mysql_query($query)) {
	echo "<script>window.open('../research_pub.php','_self')</script>";
	exit();
}

?>