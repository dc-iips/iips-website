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
          <div class="col-md-12 panel-warning">
            <div class="content-box-header panel-heading">
              <div class="panel-title ">Published Papers in Journals  </div>            
            </div>
            <div class="content-box-large box-with-header">
<table class="table table-bordered table-inverse">
             
                  <tr align="center">
                    <th width="20%">User Name</th>  <!-- 1 -->
                    <th width="20%">Title With Page Numbers </th>
                    <th width="20%">Journal </th>
                    <th width="20%">ISSN / ISBN No. </th>
                    <th width="20%">Whether peer reviewed?</th>
                    <th width="20%">If peer reviewed Write the Impact factor, Else Write NIL </th>
                    <th width="20%">No. of Co-authors </th>
                    <th width="20%">Whether you are the main Author </th>
                    <th width="20%">Data Set</th>
                    <th width="20%">Approval</th>
                   </tr> 

                  <?php
                      // mysqli_connect('localhost','root','');
                      // mysqli_select_db('diseases');

                      $conn = mysqli_connect('localhost','root','','pbas_db');
                      if(mysqli_connect_errno($conn)){
                           echo 'Failed to connect to the database : '.mysqli_connect_error();
                          die();
                      }

                      $query= "select * from teach_ppij where Data_Set='updated' order by User_Id ASC";      //1
                      $run= mysqli_query($conn,$query);
                      while($row=mysqli_fetch_array($run))    //1
                      {        
                         $user_id= $row['User_Id'];
                         $ppij_id= $row['PPIJ_ID'];
                         $TNO= $row['Teach_PPIJ_TNO'];
                         $Journal= $row['Teach_PPIJ_Journal'];
                         $ISBN= $row['Teach_PPIJ_ISBN'];
                         $PR= $row['Teach_PPIJ_PR'];
                         $IF= $row['Teach_PPIJ_IF'];
                         $NCA= $row['Teach_PPIJ_NCA'];
                         $MA= $row['Teach_PPIJ_MA'];        
                         $Data_Set= $row['Data_Set'];              
                  ?>         

    <tr align="center">

        <td><?php echo $user_id; ?></td>
        <td><?php echo $TNO;  ?></td>
        <td><?php echo $Journal; ?></td>
        <td><?php echo $ISBN; ?></td>
        <td><?php echo $PR; ?></td>
        <td><?php echo $IF; ?></td>
        <td><?php echo $NCA; ?></td>
        <td><?php echo $MA; ?></td>
        <td><?php echo $Data_Set; ?></td>
        <td><a href="approval_data.php?ppij_id=<?php echo $row["PPIJ_ID"]; ?>" name="approve_ppij"> 
            <button name="approve_ppij" value="<?php echo $row["PPIJ_ID"]; ?>" class="btn btn-info btn-xs edit_data button_style">Approve</button>
            </a>
        </td>
     </tr>
                    <?php 
                       }  //while end
                    ?>
              </table>
          
            <br /><br />
          </div>
          </div>
        </div>
<?php//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////?>
        <div class="row">
          <div class="col-md-12 panel-warning">
            <div class="content-box-header panel-heading">
              <div class="panel-title ">Articles / Chapters published in Books  </div>
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

                      $query= "select * from teach_apb where Data_Set='updated' order by User_Id ASC";      //1
                      $run= mysqli_query($conn,$query);
                      while($row=mysqli_fetch_array($run))    //1
                      {    
                        if ($row < 1) {
                          echo "No data";
                        }else{
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
                        <td><a href="approval_data.php?apb_id=<?php echo $row["apb_id"]; ?>" name="approve_apb"> 
                             <button name="approve_apb" value="<?php echo $row["apb_id"]; ?>" class="btn btn-info btn-xs edit_data button_style">Approve</button>
                             </a>
                       </td>
                        </tr>
                    <?php 
                        }//else
                       }  //while end
                    ?>
              </table>
            <br /><br />
          </div>
          </div>
        </div>
<?php////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Completed Projects / Consultancies
?>

    <div class="row">
          <div class="col-md-12 panel-warning">
            <div class="content-box-header panel-heading">
              <div class="panel-title ">Articles / Chapters published in Books  </div>
            </div>
            <div class="content-box-large box-with-header">

               <table class="table table-bordered table-inverse">
             
                  <tr align="center">
                    <th width="20%">Title </th>  <!-- 1 -->
                    <th width="20%">Agency</th>
                    <th width="20%">Month </th>
                    <th width="20%">Day </th>
                    <th width="20%">Grant / Amount Mobilized (Rs.) </th>
                    <th width="20%">Whether policy document / Patent as outcome </th>
                    <th width="20%">Data Set</th>
                    <th width="20%">Approve</th>
                   </tr> 

                  <?php
                      // mysqli_connect('localhost','root','');
                      // mysqli_select_db('diseases');

                      $conn = mysqli_connect('localhost','root','','pbas_db');
                      if(mysqli_connect_errno($conn)){
                           echo 'Failed to connect to the database : '.mysqli_connect_error();
                          die();
                      }

                      $query= "select * from teach_cpc where Data_Set='updated' order by User_Id ASC";      //1
                      $run= mysqli_query($conn,$query);
                      while($row=mysqli_fetch_array($run))    //1
                      {        
                          $cpc_id= $row['CPC_ID'];
                          $TCT= $row['Teach_CPC_Title'];
                          $Agency= $row['Teach_CPC_Agency'];
                           $Month= $row['Teach_CPC_month'];
                           $Day= $row['Teach_CPC_day'];
                           $GAM= $row['Teach_CPC_GAM'];
                           $WPD= $row['Teach_CPC_WPD'];  
                          $Data_Set= $row['Data_Set'];
                  ?>
                       <tr align="center">
                        <td><?php echo $TCT;  ?></td>
                        <td><?php echo $Agency; ?></td>
                        <td><?php echo $Month; ?></td>
                        <td><?php echo $Day; ?></td>
                        <td><?php echo $GAM; ?></td>
                        <td><?php echo $WPD; ?></td>
                        <td><?php echo $Data_Set; ?></td>
                         <td><a href="approval_data.php?cpc_id=<?php echo $row["CPC_ID"]; ?>" name="approve_cpc"> 
                             <button name="approve_cpc" value="<?php echo $row["CPC_ID"]; ?>" class="btn btn-info btn-xs edit_data button_style">Approve</button>
                             </a>
                       </td>
                    <?php 
                       }  //while end
                    ?>
              </table>
            <br /><br />
          </div>
          </div>
        </div>

<?php////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////?>
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