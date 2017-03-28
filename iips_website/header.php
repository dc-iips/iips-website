<?php
   // session_start();
    if (isset($_SESSION['username'])) {
     include('header_with_faculty.php');
    }
    else{
        include('header_without_faculty.php');
    }
?>