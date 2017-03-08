<?php
mysql_connect('localhost','root','');
mysql_select_db('pbas_db');

$delete_ppij_id= $_REQUEST['up'];

//Make Date_Set invalid
$query1 = mysql_query("UPDATE `teach_ppij` SET  Data_Set='invalid' where PPIJ_ID='$delete_ppij_id' ");

//Make a new entry of updated data with new ppij_id'
$query2 =mysql_query("UPDATE 'teach_ppij' SET where PPIJ_ID='$delete_ppij_id' ");

if ($query1 && $query2) {
  echo "<script>window.open('../research_pub.php','_self')</script>";
  echo "<script>alert('Record Submitted') </script>";
  // exit();
}

?>