<?php
    session_start();
    if(!isset($_SESSION['User_Id']))
    { 
       echo "<script>window.open('../index.php','_self')</script>";     
    }
    else
    {

       mysql_connect('localhost','root','');
       mysql_select_db('pbas_db');

       if(isset($_REQUEST['ppij_id'])){

             $query1 = mysql_query("UPDATE `teach_ppij` SET  Data_Set='valid' where PPIJ_ID='".$_REQUEST['ppij_id']."' ");
             header('Location: approval.php');
      }
     if(isset($_REQUEST['apb_id'])){

             $query1 = mysql_query("UPDATE `teach_apb` SET  Data_Set='valid' where PPIJ_ID='".$_REQUEST['ppij_id']."' ");
             header('Location: approval.php');
      }       
      if(isset($_REQUEST['cpc_id'])){

             $query1 = mysql_query("UPDATE `teach_ppij` SET  Data_Set='valid' where PPIJ_ID='".$_REQUEST['cpc_id']."' ");
             header('Location: approval.php');
      }

    }//else
?>