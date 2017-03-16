<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
       echo "<script>window.open('index.php','_self')</script>";     
    }
    else
    {
      $username= $_SESSION['username'];
 ?>
 <style>
    .edit_data{

      }
      /*.delete_data{

      }*/
  </style>
  <script type="text/javascript">
  $(document).on('click', '.edit_data', function(){  
                  var ppij_id = $(this).attr("id");  
                  
                  $.ajax({  
                            url:"research_publication/fetch.php",  
                            method:"POST",  
                            data:{ppij_id:ppij_id},  
                            
                            success: function(msg)
                            {                               
                                 var $getarray = jQuery.parseJSON(msg);
                                 
                                  $('#session').val($getarray.session);  
                                  $('#twno').val($getarray.Teach_PPIJ_TNO);  
                                  $('#PPIJ_Journal').val($getarray.Teach_PPIJ_Journal);  
                                  $('#PPIJ_ISBN').val($getarray.Teach_PPIJ_ISBN);  
                                  $('#PPIJ_PR').val($getarray.Teach_PPIJ_PR);  
                                  $('#PPIJ_NCA').val($getarray.Teach_PPIJ_NCA);  
                                  alert($getarray.Teach_PPIJ_MA);
                                  if($getarray.Teach_PPIJ_MA=="Yes")
                                   $("#PPIJ_Y").prop('checked', true);
                                  else
                                   $("#PPIJ_N").prop('checked', true);

                                 $('#ppij_submit').val("Update");
                              }  
                              ,error: function (xhr, status) {
                                   alert(status);
                               }

                        });
                        //alert(ppij_id);  
                    } ); //End ofClick and function
          //);//end of ready
  $(document).on('click', '.delete_data', function(){  
                  var ppij_id = $(this).attr("id");  
                  
                  $.ajax({  
                            url:"research_publication/delete.php",  
                            method:"POST",  
                            data:{ppij_id:ppij_id},  
                            
                            success: function(msg)
                            {                               
                                alert("Data Deleted");
                                $("#table_div").html("Loading Data.......");
                                $.ajax({
                                     url: "research_publication/ppij_select_db.php?user=<?php echo $username ;?>",
                                      type: "post",
                                      data: {},
                                     success: function(msg)
                                     {
                                          $("#table_div").html(msg).show(500);    
                                     }
                                 });//end of ajax
                            }  //end of success
                              ,error: function (xhr, status) {
                                   alert(status);
                               }

                        });
                        //alert(ppij_id);  
                    } ); //End ofClick and function
          //);//end of ready
   

    





    
 </script>
      <center><h1>Your Inserted Data</h1></center>
      <table class ="table table-striped" id="table_div"  style="border-color:#337ab7;" align="center" border="1px" >
      <tr>
        <th>Session Year</th>
        <th>Serial No.</th>
        <th>Title</th>
        <th>Journal</th>
        <th>ISSN</th>
        <th>Peer Reviews</th>
        <th>Co-authors</th>
        <th>Main author</th>
        <th>Delete</th>
        <th>Update</th>
      </tr> 

     <?php
     mysql_connect('localhost','root','');
     mysql_select_db('pbas_db');

      $username= $_REQUEST['user'];
      $query= "SELECT * FROM teach_ppij WHERE User_Id = '$username'  AND (Data_Set='new' OR Data_Set='valid') ";

      $run= mysql_query($query);
      if (!$run) { // add this check.
        die('Invalid query: ' . mysql_error());
      }

      while($row=mysql_fetch_array($run)) {
        
        $session= $row['Session'];
        $user_id= $row['User_Id'];
        $ppij_id= $row['PPIJ_ID'];
        $TNO= $row['Teach_PPIJ_TNO'];
        $Journal= $row['Teach_PPIJ_Journal'];
        $ISBN= $row['Teach_PPIJ_ISBN'];
        $PR= $row['Teach_PPIJ_PR'];
        $NCA= $row['Teach_PPIJ_NCA'];
        $MA= $row['Teach_PPIJ_MA'];
      
    ?>

    <font size="5" color="red">
       <?php echo @$_GET['deleted']; ?> 
    </font>

    <tr align="center">
    <td><?php echo $session; ?></td>
    <td><?php echo $user_id; ?></td>
    <td><?php echo $TNO; ?></td>
    <td><?php echo $Journal; ?></td>
    <td><?php echo $ISBN; ?></td>
    <td><?php echo $PR; ?></td>
    <td><?php echo $NCA; ?></td>
    <td><?php echo $MA; ?></td>
    <!-- <td><a href='research_publication\delete.php?del_ppij_id=<?php //echo $ppij_id; ?> '>Delete</a></td>  -->

    <td><button type="submit" id="<?php echo $row["PPIJ_ID"]; ?>" name="infodelete" class="btn btn-warning btn-xs delete_data ">Delete</button></td>
    <td><button name="edit" value="Edit" id="<?php echo $row["PPIJ_ID"]; ?>" class="btn btn-info btn-xs edit_data ">Update</button></td>
    <!-- <td><button name="edit" value="Edit" id="<?php //echo $row["PPIJ_ID"]; ?>" onClick="fetchdata(<?//php echo $row["PPIJ_ID"]; ?>)" class="btn btn-info btn-xs ">Update</a></button></td> -->
    
    </tr>
    <?php 
    }  //while end
    ?>
  </table>

<?php

} //else

?>