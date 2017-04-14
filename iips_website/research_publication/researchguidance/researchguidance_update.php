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


      $query1 = mysql_query("UPDATE `teach_rg` SET  Data_Set='updated' where RG_ID='".$_POST["rg_id"]."' ");

     include "researchguidance_insert_db.php";

     }//else
?>