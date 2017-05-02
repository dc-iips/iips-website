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


      $query1 = mysql_query("UPDATE `teach_fcp` SET  Data_Set='updated' where FCP_ID='".$_POST["fcp_id"]."' ");

     include "fcp_insert_db.php";

     }//else
?>