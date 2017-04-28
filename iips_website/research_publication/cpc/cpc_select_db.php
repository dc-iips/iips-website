<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
       echo "<script>window.open('../index.php','_self')</script>";     
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
                  var cpc_id = $(this).attr("id");
                  $.ajax({  
                            url:"research_publication/cpc_update_fetch.php",  
                            method:"POST",  
                            data:{cpc_id:cpc_id},
                            success: function(msg)
                            {                               
                                 var $getarray = jQuery.parseJSON(msg);


                                  $('#CPC_ID').val($getarray.CPC_ID); 

                                  $('#session').val($getarray.Session);  
                                  $('#CPC_Title').val($getarray.Teach_CPC_Title);  
                                  $('#CPC_Agency').val($getarray.Teach_CPC_Agency);  
                                  $('#CPC_Month').val($getarray.Teach_CPC_month);  
                                  $('#CPC_Day').val($getarray.Teach_CPC_day);  
                                  $('#CPC_GAM').val($getarray.Teach_CPC_GAM);
                                  $('#CPC_WPD').val($getarray.Teach_CPC_WPD); 
                                 $('#cpc_submit').val("Update");
                            }  
                              ,error: function (xhr, status) {
                                   alert(status);
                               }
                        });
                    }); //End ofClick and function
          //end of ready
   $(document).on('click', '.view_data', function(){  
                  var cpc_id = $(this).attr("id");
                  $.ajax({  
                            url:"research_publication/cpc_fetch.php",  
                            method:"POST",  
                            data:{cpc_id:cpc_id},
                            success: function(msg)
                            {                               
                                 var $getarray = jQuery.parseJSON(msg);

                                  $('#2').val($getarray.Session);  
                                  $('#3').val($getarray.Teach_CPC_Title);  
                                  $('#4').val($getarray.Teach_CPC_Agency);  
                                  $('#5').val($getarray.Teach_CPC_month);  
                                  $('#6').val($getarray.Teach_CPC_day);  
                                  $('#7').val($getarray.Teach_CPC_GAM);  
                                  $('#8').val($getarray.Teach_CPC_WPD);  
                                 //alert($getarray.cpc_ID);
                                 $('#ViewModal').modal('show');
                            }  
                              ,error: function (xhr, status) {
                                   alert(status);
                               }
                        });
                    }); //End ofClick and function
  $(document).on('click', '.delete_data', function(){  
                  var cpc_id = $(this).attr("id");  
                  $.ajax({  
                            url:"research_publication/cpc_delete.php",  
                            method:"POST",  
                            data:{cpc_id:cpc_id},
                            success: function(msg)
                            {                               
                                //alert("Data Deleted");
                                $("#table_div").html("Loading Data.......");
                                $.ajax({
                                     url: "research_publication/cpc_select_db.php",
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
        <th>Title</th>
        <th>Agency</th>
        <th>View</th>
        <th>Delete</th>
        <th>Update</th>
      </tr> 

     <?php
     mysql_connect('localhost','root','');
     mysql_select_db('pbas_db');

      $query= "SELECT * FROM teach_cpc WHERE User_Id = '$username'  AND (Data_Set='new' OR Data_Set='valid') ORDER BY CPC_ID DESC";

      $run= mysql_query($query);
      if (!$run) { // add this check.
        die('Invalid query: ' . mysql_error());
      }

      $serial_no = 0;
      while($row=mysql_fetch_array($run)){
        
        $session= $row['Session'];
        $serial_no++;
        $user_id= $row['User_Id'];
        $cpc_id= $row['CPC_ID'];
        $TCT= $row['Teach_CPC_Title'];
        $Agency= $row['Teach_CPC_Agency'];
        $Month= $row['Teach_CPC_month'];
        $Day= $row['Teach_CPC_day'];
        $GAM= $row['Teach_CPC_GAM'];
        $WPD= $row['Teach_CPC_WPD'];
      
    ?>

    <font size="5" color="red">
       <?php echo @$_GET['deleted']; ?> 
    </font>

    <tr align="center">

        <td><?php echo $serial_no; ?></td>
        <td><?php echo $session;  ?></td>
        <td><?php echo $TCT; ?></td>
        <td><?php echo $Agency; ?></td>

        <td><button type="submit" name="view" id="<?php echo $row["CPC_ID"]; ?>"  class="btn btn-success btn-xs view_data button_style" style="">View</button></a></td>

        <td><button type="submit" id="<?php echo $row["CPC_ID"]; ?>" name="infodelete" class="btn btn-warning btn-xs delete_data button_style ">Delete</button></td>

        <td><a href="#slide_up"><button name="edit" value="Edit" id="<?php echo $row["CPC_ID"]; ?>" class="btn btn-info btn-xs edit_data button_style">Update</button></a></td>
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
                                <label>Title</label></br>
                                </div>   
                                <div class="col-md-9">
                                <input type="text" class="form-control required" name="" id="3" placeholder="" disabled="disabled" /></br>
                                </div>

                                <div class="col-md-3">
                                <label>Agency</label></br>
                                </div>   
                                <div class="col-md-9">
                                <input type="text" class="form-control required" name="" id="4" placeholder="" disabled="disabled" /></br>
                                </div>

                                <div class="col-md-3">
                                <label>Months</label></br>
                                </div>   
                                <div class="col-md-9">
                                <input type="number" class="form-control required" name="" id="5" placeholder="" disabled="disabled" /></br>
                                </div>

                                <div class="col-md-3">
                                <label>Days</label></br>
                                </div>   
                                <div class="col-md-9">
                                <input type="number" class="form-control required" name="" id="6" placeholder="" disabled="disabled" /></br>
                                </div>

                                <div class="col-md-3">
                                <label>Grant / Amount Mobilized (Rs.)</label></br>
                                </div>   
                                <div class="col-md-9">
                                <input type="number" class="form-control required" name="" id="7" placeholder="" disabled="disabled" /></br>
                                </div>

                                <div class="col-md-3">
                                <label>Whether policy document / Patent as outcome</label></br>
                                </div>   
                                <div class="col-md-9">
                                <input type="text" class="form-control required" name="" id="8" placeholder="" disabled="disabled" /></br>
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