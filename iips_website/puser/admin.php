<?php
    session_start();
    if(!isset($_SESSION['User_Id']))
    { 
       echo "<script>window.open('../index.php','_self')</script>";     
    }
    else
    {
      $username= $_SESSION['User_Id']; 
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>PBAS Admin IIPS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="../css/styles.css" rel="stylesheet">
</head>
  <body>
  	<?php include 'adminHeader.php' ?>
    <div class="page-content">
    	<div class="row">
		  <?php include 'adminSidebar.php' ?>
		  <div class="col-md-8">
		  	<div class="row">
		  		<div class="col-md-6">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">Users </div>
							
						</div>
		  				<div class="panel-body">
<table class ="table table-striped" id="table_div"  style="border-color:#337ab7;" align="center" border="1px" >
      <tr>
        <th>Serial No.</th>
        <th>Users</th>
      </tr> 

     <?php
     mysql_connect('localhost','root','');
     mysql_select_db('pbas_db');

      $query= "SELECT * FROM `userinfo` ORDER BY User_Id DESC";

      $run= mysql_query($query);
      if (!$run) { // add this check.
        die('Invalid query: ' . mysql_error());
      }

      $serial_no = 0;
      while($row=mysql_fetch_array($run)){
        
        //$session= $row['Session'];
        $serial_no++;
        $user_id= $row['User_Id'];
      
    ?>

    <font size="5" color="red">
       <?php echo @$_GET['deleted']; ?> 
    </font>

    <tr align="center">

        <td><?php echo $serial_no; ?></td>
        <td><?php echo $user_id;  ?></td>
    </tr>
    <?php 
    }
    ?>
    </table>
  </center>

							<br /><br />
		  				</div>
		  			</div>
		  		</div>	  	
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2017 <a href='#'>IIPS Website</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/custom.js"></script>
  </body>
</html>

<?php	
	}
?>