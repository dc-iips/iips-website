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


      $query1 = mysql_query("UPDATE `teach_ppc` SET  Data_Set='updated' where PPC_ID='".$_POST["ppc_id"]."' ");

     include "paperpresented_insert_db.php";

     }//else
?>