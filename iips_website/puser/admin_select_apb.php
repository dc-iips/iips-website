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
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">Articles / Chapters published in Books </div>
								
								<div class="panel-options">
									<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
									<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">

               <table class="table table-bordered table-inverse">
             
                  <tr align="center">
                    <th width="20%">User Name</th>  <!-- 1 -->
                    <th width="20%">Title With Page Numbers </th>
                    <th width="20%">Book Title, Editor And Publisher  </th>
                    <th width="20%">ISSN / ISBN No. </th>
                    <th width="20%">If peer reviewed Write the Impact factor, Else Write NIL </th>
                    <th width="20%">No. of Co-authors </th>
                    <th width="20%">Whether you are the main Author </th>
                    <th width="20%">Data Set</th>
                   </tr> 

                  <?php
                      // mysqli_connect('localhost','root','');
                      // mysqli_select_db('diseases');

                      $conn = mysqli_connect('localhost','root','','pbas_db');
                      if(mysqli_connect_errno($conn)){
                           echo 'Failed to connect to the database : '.mysqli_connect_error();
                          die();
                      }

                      $query= "select * from teach_apb where Data_Set='new' Or Data_Set='valid' order by User_Id ASC";      //1
                      $run= mysqli_query($conn,$query);
                      while($row=mysqli_fetch_array($run))    //1
                      {        
                          $user_id= $row['user_id'];
                          $apb_id= $row['apb_id'];
                          $TNO= $row['Teach_APB_TNO'];
                          $BEP= $row['Teach_APB_BEP'];
                          $ISBN= $row['Teach_APB_ISSN'];
                          $WPR= $row['Teach_APB_WPR'];
                          $NOC= $row['Teach_APB_NOC'];
                          $MA= $row['Teach_APB_MA'];    
                         	$Data_Set= $row['Data_Set'];   
                  ?>
                       <tr align="center">
                        <td><?php echo $user_id; ?></td>
                        <td><?php echo $TNO;  ?></td>
                        <td><?php echo $BEP; ?></td>
                        <td><?php echo $ISBN; ?></td>
                        <td><?php echo $WPR; ?></td>
                        <td><?php echo $NOC; ?></td>
                        <td><?php echo $MA; ?></td>
                        <td><?php echo $Data_Set; ?></td>
                     </tr>
                    <?php 
                       }  //while end
                    ?>
              </table>
								<br /><br />
							</div>
		  				</div>
		  			</div>
		  		</div>
		  	</div>
		  	
		  </div>
		</div>
    </div>

    <footer style="background:#003262">
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