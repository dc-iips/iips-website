<?php
mysql_connect('localhost','root','');
mysql_select_db('pbas_db');

// $("#table_div").delete(function(event){
//                  stop form from submitting normally 
//                 event.preventDefault();
//             });


$delete_ppij_id= $_REQUEST['de'];
//$delete_id =$_GET['del'];

//$query= "delete from teach_ppij where id='$delete_id'";
//$ppij_id = "SELECT max(PPIJ_ID)+1 from `teach_ppij` ";

$query = "UPDATE `teach_ppij` SET  Data_Set='deleted' where PPIJ_ID='$delete_ppij_id' ";

// if (mysql_query($query)) {
// 	echo "<script>window.open('../research_pub.php','_self')</script>";
// 	// exit();
// }

?>