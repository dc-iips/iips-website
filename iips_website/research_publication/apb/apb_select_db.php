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
        font-size: 12px;
      }

</style>
<script type="text/javascript">
  $(document).on('click', '.edit_data', function(){  
                  var apb_id = $(this).attr("id");
                  $.ajax({  
                            url:"research_publication/apb/apb_update.php",  
                            method:"POST",  
                            data:{apb_id:apb_id},
                            success: function(msg)
                            {                               
                                 var $getarray = jQuery.parseJSON(msg);


                                  //$('#apb_id').val($getarray.apb_id); 

                                  $('#session').val($getarray.Session);  
                                  $('#APB_TNO').val($getarray.Teach_APB_TNO);  
                                  $('#APB_BEP').val($getarray.Teach_APB_BEP);  
                                  $('#APB_ISSN').val($getarray. Teach_APB_ISSN);  
                                  $('#APB_WPR').val($getarray.Teach_APB_WPR );  
                                  $('#APB_NOC').val($getarray.Teach_APB_NOC);  

                                  if($getarray.Teach_APB_MA=="Yes")
                                   $("#ACPB_Y").prop('checked', true);
                                  else
                                   $("#ACPB_N").prop('checked', true);
                                 $('#apb_submit').val("Update");

                                 //alert($getarray.PPIJ_ID);
                            }  
                              ,error: function (xhr, status) {
                                   alert(status);
                               }
                        });
                    }); //End ofClick and function
          //end of ready
   $(document).on('click', '.view_data', function(){  
                  var apb_id = $(this).attr("id");
                  $.ajax({  
                            url:"research_publication/apb/apb_fetch.php",  
                            method:"POST",  
                            data:{apb_id:apb_id},
                            success: function(msg)
                            {                               
                                 var $getarray = jQuery.parseJSON(msg);

                                  $('#2').val($getarray.Session);  
                                  $('#3').val($getarray.Teach_APB_TNO);  
                                  $('#4').val($getarray.Teach_APB_BEP);  
                                  $('#5').val($getarray.Teach_APB_ISSN);  
                                  $('#6').val($getarray.Teach_APB_WPR);  
                                  $('#7').val($getarray.Teach_APB_NOC );  
                                  $('#8').val($getarray.Teach_APB_MA);  
                                 //alert($getarray.PPIJ_ID);
                                 $('#ViewModal').modal('show');
                            }    
                              ,error: function (xhr, status) {
                                   alert(status);
                               }
                        });
                    }); //End ofClick and function
  $(document).on('click', '.delete_data', function(){  
                  var apb_id = $(this).attr("id");  
                  $.ajax({  
                            url:"research_publication/apb/apb_delete.php",  
                            method:"POST",  
                            data:{apb_id:apb_id},
                            success: function(msg)
                            {                               
                                //alert("Data Deleted");
                                $("#table_div").html("Loading Data.......");
                                $.ajax({
                                     url: "research_publication/apb/apb_select_db.php",
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
        <th>Journal</th>
        <!-- 
        <th>ISSN</th>
        <th>Peer Reviews</th>
        <th>Co-authors</th>
        <th>Main author</th> -->
        <th>View</th>
        <th>Delete</th>
        <th>Update</th>
      </tr> 

     <?php
     mysql_connect('localhost','root','');
     mysql_select_db('pbas_db');

      $query= "SELECT * FROM teach_apb WHERE user_id = '$username'  AND (Data_Set='new' OR Data_Set='valid') ORDER BY apb_id DESC";

      $run= mysql_query($query);
      if (!$run) { // add this check.
        die('Invalid query: ' . mysql_error());
      }

      $serial_no = 0;
      while($row=mysql_fetch_array($run)){
        
        $session= $row['Session'];
        $serial_no++;
         
        $apb_id= $row['apb_id'];
        $TNO= $row['Teach_APB_TNO'];
        $BEP= $row['Teach_APB_BEP'];
        $ISBN= $row['Teach_APB_ISSN'];
        $WPR= $row['Teach_APB_WPR'];
        $NOC= $row['Teach_APB_NOC'];
        $MA= $row['Teach_APB_MA'];
      
    ?>

    <font size="5" color="red">
       <?php echo @$_GET['deleted']; ?> 
    </font>

    <tr align="center">

        <td><?php echo $serial_no; ?></td>
        <td><?php echo $session;  ?></td>
        <td><?php echo $TNO; ?></td>
        <td><?php echo $BEP; ?></td>
        <!-- <td><?php //echo $ISBN; ?></td>
        <td><?php //echo $PR; ?></td>
        <td><?php //echo $NCA; ?></td>
        <td><?php //echo $MA; ?></td>
 -->
        <td><button type="submit" name="view" id="<?php echo $row["apb_id"]; ?>"  class="btn btn-success btn-xs view_data button_style" style="">View</button></a></td>

        <td><button type="submit" id="<?php echo $row["apb_id"]; ?>" name="infodelete" class="btn btn-warning btn-xs delete_data button_style ">Delete</button></td>

        <td><a href="#slide_up"><button name="edit" value="Edit" id="<?php echo $row["apb_id"]; ?>" class="btn btn-info btn-xs edit_data button_style">Update</button></a></td>
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
                                <label>Title With Page Numbers</label></br>
                                </div>   
                                <div class="col-md-9">
                                <input type="text" class="form-control required" name="" id="3" placeholder="" disabled="disabled" /></br>
                                </div>

                                <div class="col-md-3">
                                <label>Book Title, Editor And Publisher</label></br>
                                </div>   
                                <div class="col-md-9">
                                <input type="text" class="form-control required" name="" id="4" placeholder="" disabled="disabled" /></br>
                                </div>

                                <div class="col-md-3">
                                <label>ISSN / ISBN No.</label></br>
                                </div>   
                                <div class="col-md-9">
                                <input type="text" class="form-control required" name="" id="5" placeholder="" disabled="disabled" /></br>
                                </div>

                                <div class="col-md-3">
                                <label>Peer Reviewed</label></br>
                                </div>   
                                <div class="col-md-9">
                                <input type="text" class="form-control required" name="" id="6" placeholder="" disabled="disabled" /></br>
                                </div>

                                <div class="col-md-3">
                                <label>No. of Co-authors</label></br>
                                </div>   
                                <div class="col-md-9">
                                <input type="text" class="form-control required" name="" id="7" placeholder="" disabled="disabled" /></br>
                                </div>

                                <div class="col-md-3">
                                <label>Whether you are the main Author</label></br>
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