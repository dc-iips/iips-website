
<!-- modal -->
<?php

    session_start();
    if(!isset($_SESSION['username']))
    {
       echo "<script>window.open('../index.php','_self')</script>";     
    }
    else
    {
        mysql_connect('localhost','root','');
        mysql_select_db('pbas_db');


        $view_ppij_id=$_POST["ppij_id"];

      $query1= "SELECT * FROM teach_ppij WHERE PPIJ_ID ='$view_ppij_id' ";

      $run1= mysql_query($query1);
      if (!$run1) { // add this check.
        die('Invalid query: ' . mysql_error());
      }
        $session1= $row['Session'];
        //$sno1 = $serial_no;
        $user_id1= $row['User_Id'];
        $ppij_id1= $row['PPIJ_ID'];
        $TNO1= $row['Teach_PPIJ_TNO'];
        $Journal1= $row['Teach_PPIJ_Journal'];
        $ISBN1= $row['Teach_PPIJ_ISBN'];
        $PR1= $row['Teach_PPIJ_PR'];
        $NCA1= $row['Teach_PPIJ_NCA'];
        $MA1= $row['Teach_PPIJ_MA'];

        echo "<script>alert($Teach_PPIJ_Journal) </script>";
        echo $Teach_PPIJ_Journal;
      
    ?>

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
                                <label>S. No.</label></br>
                                </div>   
                                <div class="col-md-9">
                                <input type="text" class="form-control required" name="" id="" placeholder="<?php echo $session1; ;?>" disabled="disabled" /></br>
                                </div>

                                <div class="col-md-3">
                                <label>Session</label></br>
                                </div>   
                                <div class="col-md-9">
                                <input type="text" class="form-control required" name="" id="" placeholder="<?php echo $session1; ;?>" disabled="disabled" /></br>
                                </div>


                                <div class="col-md-3">
                                <label>Title With Page Numbers</label></br>
                                </div>   
                                <div class="col-md-9">
                                <input type="text" class="form-control required" name="" id="" placeholder="<?php echo $TNO1; ;?>" disabled="disabled" /></br>
                                </div>

                                <div class="col-md-3">
                                <label>Journal</label></br>
                                </div>   
                                <div class="col-md-9">
                                <input type="text" class="form-control required" name="" id="" placeholder="<?php echo $Journal1; ;?>" disabled="disabled" /></br>
                                </div>

                                <div class="col-md-3">
                                <label>ISSN / ISBN No.</label></br>
                                </div>   
                                <div class="col-md-9">
                                <input type="text" class="form-control required" name="" id="" placeholder="<?php echo $ISBN1; ;?>" disabled="disabled" /></br>
                                </div>

                                <div class="col-md-3">
                                <label>Peer Reviewed</label></br>
                                </div>   
                                <div class="col-md-9">
                                <input type="text" class="form-control required" name="" id="" placeholder="<?php echo $PR1; ;?>" disabled="disabled" /></br>
                                </div>

                                <div class="col-md-3">
                                <label>No. of Co-authors</label></br>
                                </div>   
                                <div class="col-md-9">
                                <input type="text" class="form-control required" name="" id="" placeholder="<?php echo $NCA1; ;?>" disabled="disabled" /></br>
                                </div>

                                <div class="col-md-3">
                                <label>Whether you are the main Author</label></br>
                                </div>   
                                <div class="col-md-9">
                                <input type="text" class="form-control required" name="" id="" placeholder="<?php echo $MA1; ;?>" disabled="disabled" /></br>
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
}// session
 ?>