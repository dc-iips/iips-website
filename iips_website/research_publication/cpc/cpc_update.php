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


      $query1 = mysql_query("UPDATE `teach_cpc` SET  Data_Set='updated' where CPC_ID='".$_POST["cpc_id"]."' ");
      if ($query1) {
       include "cpc_insert_db.php";
      }
     

     }//else
?>