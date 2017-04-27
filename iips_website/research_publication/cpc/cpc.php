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
     <script language="javascript">    

       $(document).ready(function()
       {
                $("#table_div").html("loading data");

                $.ajax({
                  url: "research_publication/cpc_select_db.php",
                  type: "post",
                  data: { },
                    success: function(msg)
                    {
                      $("#table_div").html(msg).show(500);    
                    }
                });//end of ajax
        });// end of ready

        $("#cpc_save").submit(function(event){
              /* stop form from submitting normally */
               event.preventDefault();
               var values = $(this).serialize();
               //alert(values);
                   
        if($("#cpc_submit").val()=="Update")
        {
           var session_des = $(this).attr("id");
           $.ajax({
                    url: "research_publication/cpc_update.php",
                    type: "post",
                    data: values,
                    success: function()
                    {
                    alert("Data Updated Successfully.");  
                    
                    $("#session").val("");
                    $("#CPC_Title").val("");
                    $("#CPC_Agency").val("");
                    $("#CPC_Month").val("");
                    $("#CPC_Day").val("");
                    $("#CPC_GAM").val("");
                    $("#CPC_WPD").val("")
                    $("#table_div").html("Loading Data.......");
                    $.ajax({
                          url: "research_publication/cpc_select_db.php",
                          type: "post",
                          data: {},
                          success: function(msg)
                          {
                              $("#table_div").html(msg).show(500);    
                          }
                    });//
                    }//end of function
                }); //End of .ajax         
        }

          if($("#cpc_submit").val()=="Save"){
               
               $.ajax({
                    url: "research_publication/cpc_insert_db.php",
                    type: "post",
                    data: values,
                    success: function()
                    {
                    alert("Data Added Successfully.");

                    $("#CPC_Title").val("");
                    $("#CPC_Agency").val("");
                    $("#CPC_Month").val("");
                    $("#CPC_Day").val("");
                    $("#CPC_GAM").val("");
                    $("#CPC_WPD").val("")
                    //alert(values);
                    $("#table_div").html("Loading Data.......");
                    $.ajax({
                          url: "research_publication/cpc_select_db.php",
                          type: "post",
                          data: {},
                          success: function(msg)
                          {
                              $("#table_div").html(msg).show(500);    
                          }
                    });//
                    }//end of function
                }); //End of .ajax
             }//end of if
             
        });

     </script>

    <center><h4><b>Research Publication And Academic Contribution</b></h4></center>
	</div><!--end of box-shadow-->
    <div class="row-fluid">
        <div class="col-md-11">
			<!--"Completed Projects" Panel started -->
			 <div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
				
				<div class="panel-heading">	
				  <h4 id="completed" class="panel-title" align="center">Completed Projects / Consultancies</h4>				
				</div><br>
				
				<form role="form" id="cpc_save" name="cpc_save" method="post">
					<div id="completedFields">

						<label>Session</label>
              
                		<select id="" style="width: 220px">      
                 		<?php 
                 		   include('../DBConnect.php');
                 		   //$uname=$_SESSION['username'];
                 		   $query = mysqli_query($conn,"SELECT session_description from session_master");
                 		   while($row = mysqli_fetch_assoc($query))
                 		   {
                 		?>
                  		    <option name="session" id="<?php echo $row["session_description"]; ?>" ><?php echo $row['session_description']; ?></option>
                        <?php
                           } 
                        ?>
                		</select>
                		</br>

						 <label>Title</label>
						   <input class="form-control" type="text" id="CPC_Title" name="CPC_Title" required="required"/> 
						 
						 <label>Agency</label>
						   <input class="form-control" type="text" id="CPC_Agency" name="CPC_Agency" required="required"/> 
						 
						 <label>Duration</label>				   
						  <br>
	 						<select>
							<option id="CPC_Month" name="CPC_Month" value="0" selected="selected">0 months</option>
							<?php 
								 $i = 1;
							     while ($i<=12) 
							     {
							 ?>
								<option id="CPC_Month" name="CPC_Month" value="<?php echo $i; ?>" > <?php echo $i++;?> months</option>
							<?php 
								 }
						    ?>
						</select>
 &nbsp
 						<select >
							<option id="CPC_Day" name="CPC_Day" value="0">0 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="1">1 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="2">2 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="3">3 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="4">4 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="5">5 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="6">6 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="7">7 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="8">8 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="9">9 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="10">10 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="11">11 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="12">12 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="13">13 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="14">14 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="15">15 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="16">16 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="17">17 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="18">18 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="19">19 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="20">20 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="21">21 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="22">22 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="23">23 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="24">24 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="25">25 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="26">26 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="27">27 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="28">28 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="29">29 days </option>						    
						    <option id="CPC_Day" name="CPC_Day" value="30">30 days </option>
						    <option id="CPC_Day" name="CPC_Day" value="31">31 days </option>
						    
     					</select><br>
						<br>		

						 <label>Grant / Amount Mobilized (Rs.)</label>
						   <input type="number" class="form-control" type="text" id="CPC_GAM" name="CPC_GAM" required="required"/> 

						 <label>Whether policy document / Patent as outcome</label>
						   <input class="form-control" type="text" id="CPC_WPD" name="CPC_WPD" required="required"/> 

					</div> 
					<br />
					<input class="btn btn-md btn-primary" type="submit" value="Save" name="cpc_submit" id="cpc_submit" />
					<input class="btn btn-md btn-primary" type="reset" value="Reset" name="reset" /> 
				  </form>
				</div><!--end of panel-->
        </div><!--End Of col-md-6 --> 
	 </div><!--End Of row-fluid Class --> 
</div>
<!--End Of container --> 
<!-- Table -->

<div class="view">
  <div class="full col-sm-12" id="table_div">

  </div>
</div> 
<!-- Tabssle End -->
<div id="temp">

</div>
<!--  -->

<?php 
   }  //else
?>