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


      $query1 = mysql_query("UPDATE `teach_ilc` SET  Data_Set='updated' where ILC_ID='".$_POST["ilc_id"]."' ");

     include "invitedlecture_insert_db.php";

     }//else
?>