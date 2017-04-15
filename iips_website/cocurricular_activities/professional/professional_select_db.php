<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
       echo "<script>window.open('../../index.php','_self')</script>";     
    }
    else
    {
      $username= $_SESSION['username'];
 ?>
<style>
    .edit_data{
      }.view_data{
      }
    .button_style{
        padding: 4px 12px;
        text-align: center;
        display: inline-block;
        font-size: 12px
      }
</style>
<script type="text/javascript">
  $(document).on('click', '.edit_data', function(){  
                  var professional_id = $(this).attr("id");
                  $.ajax({  
                            url:"cocurricular_activities/professional/professional_update_fetch.php",  
                            method:"POST",  
                            data:{professional_id:professional_id},
                            success: function(msg)
                            {                               
                                 var $getarray = jQuery.parseJSON(msg);

                                  $('#PROFESSIONAL_ID').val($getarray.PROFESSIONAL_ID);

                                  $('#session').val($getarray.Session);  
                                  $('#PROFESSIONAL_TOA').val($getarray.Teach_PDA_TOA);  
                                  $('#PROFESSIONAL_YSR').val($getarray.Teach_PDA_YSR);
                                  $('#professional_submit').val("Update");
                            }  
                              ,error: function (xhr, status) {
                                   alert(status);
                               }
                        });
                    }); //End ofClick and function
          //end of ready
   $(document).on('click', '.view_data', function(){  
                  var professional_id = $(this).attr("id");
                  $.ajax({  
                            url:"cocurricular_activities/professional/professional_fetch.php",  
                            method:"POST",  
                            data:{professional_id:professional_id},
                            success: function(msg)
                            {                               
                                 var $getarray = jQuery.parseJSON(msg);

                                  $('#2').val($getarray.Session);  
                                  $('#3').val($getarray.Teach_PDA_TOA);  
                                  $('#4').val($getarray.Teach_PDA_YSR); 
                                 $('#ViewModal').modal('show');
                            }  
                              ,error: function (xhr, status) {
                                   alert(status);
                               }
                        });
                    }); //End ofClick and function
  $(document).on('click', '.delete_data', function(){  
                  var professional_id = $(this).attr("id");  
                  $.ajax({  
                            url:"cocurricular_activities/professional/professional_delete.php",  
                            method:"POST",  
                            data:{professional_id:professional_id},
                            success: function(msg)
                            {                               
                                //alert("Data Deleted");
                                $("#table_div").html("Loading Data.......");
                                $.ajax({
                                     url: "cocurricular_activities/professional/professional_select_db.php",
                                      type: "post",
                                      data: {},
                                     success: function(msg){
                                          $("#table_div").html(msg).show(500);    
                                     }
                                });//end of ajax
                            }  //end of success
                              ,error: function (xhr, status) {
                                   alert(status);
                               }
                        });  
                  }); //End ofClick and function
</script>
  <center style="height: 400px; overflow: scroll;"><h3>Your Inserted Data</h3>
    <table class ="table table-striped" id="table_div"  style="border-color:#337ab7;" align="center" border="1px" >
      <tr>
        <th>Serial No.</th>
        <th>Session Year</th>
        <th>Type of activity</th>
        <th>Yearly/Semester wise</th>
        <th>View</th>
        <th>Delete</th>
        <th>Update</th>
      </tr> 

     <?php
     mysql_connect('localhost','root','');
     mysql_select_db('pbas_db');

      $query= "SELECT * FROM teach_pda WHERE User_Id = '$username'  AND (Data_Set='new' OR Data_Set='valid') ORDER BY PROFESSIONAL_ID DESC";

      $run= mysql_query($query);
      if (!$run) { // add this check.
        die('Invalid query: ' . mysql_error());
      }

      $serial_no = 0;
      while($row=mysql_fetch_array($run)){
        
        $session= $row['Session'];
        $serial_no++;
        $user_id= $row['User_Id'];
        $corporate_id= $row['PROFESSIONAL_ID'];
        $toa= $row['Teach_PDA_TOA'];
        $yearly= $row['Teach_PDA_YSR'];
    ?>

    <font size="5" color="red">
       <?php echo @$_GET['deleted']; ?> 
    </font>

    <tr align="center">

        <td><?php echo $serial_no; ?></td>
        <td><?php echo $session;  ?></td>
        <td><?php echo $toa; ?></td>
        <td><?php echo $yearly; ?></td>
        
        <td><button type="submit" name="view" id="<?php echo $row["PROFESSIONAL_ID"]; ?>"  class="btn btn-success btn-xs view_data button_style" style="">View</button></a></td>

        <td><button type="submit" id="<?php echo $row["PROFESSIONAL_ID"]; ?>" name="infodelete" class="btn btn-warning btn-xs delete_data button_style ">Delete</button></td>

        <td><a href="#slide_up"><button name="edit" value="Edit" id="<?php echo $row["PROFESSIONAL_ID"]; ?>" class="btn btn-info btn-xs edit_data button_style">Update</button></a></td>
    </tr>
    <?php 
    }
    ?>
    </table>
  </center>


    <div class="modal fade" id="ViewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                             <h4 class="modal-title">Details of your inserted data.</h4>
                        </div>
                        <div class="modal-body ">
                            <form class="form-horizontal" role="form">

                                <div class="col-md-3">
                                <label>Session</label></br>
                                </div>   
                                <div class="col-md-9">
                                <input type="text" class="form-control required" name="" id="2" placeholder="" disabled="disabled" /></br>
                                </div>

                                <div class="col-md-3">
                                <label>Type of activity</label></br>
                                </div>   
                                <div class="col-md-9">
                                <input type="text" class="form-control required" name="" id="3" placeholder="" disabled="disabled" /></br>
                                </div>

                                <div class="col-md-3">
                                <label>Yearly/semester CORPORATE</label></br>
                                </div>   
                                <div class="col-md-9">
                                <input type="text" class="form-control required" name="" id="4" placeholder="" disabled="disabled" /></br>
                                </div>
               
                                <div class="form-group">
                                     <div class="col-lg-offset-6 col-lg-6">
                                        
                                        <button type="button" class="btn btn-large btn-primary" data-dismiss="modal">Close</button>
                                     </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <?php

} //else

?>