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
 
 <script language="javascript">    

       $(document).ready(function()
       {
                $("#table_div").html("loading data");

                $.ajax({
                  url: "research_publication/apb/apb_select_db.php",
                  type: "post",
                  data: { },
                    success: function(msg)
                    {
                      
                      $("#table_div").html(msg).show(500);    
                    }
                });//end of ajax
              });//end of ready
        $("#apb").submit(function(event){
            
              /* stop form from submitting normally */
               event.preventDefault();
               var values = $(this).serialize();
               //alert(values);
               
              if($("#apb_save").val()=="Save"){
                
               
               $.ajax({
                    url: "research_publication/apb/apb_insert_db.php",
                    type: "post",
                    data: values,
                    success: function()
                    {
                    alert("Data Added Successfully.");

                    $("#session").val("");
                    $("#APB_TNO").val("");
                    $("#APB_BEP").val("");
                    $("#APB_ISSN").val("");
                    $("#APB_WPR").val("");
                    $("#APB_NOC").val("");
                    $("#ACPB_Y").val("");
                    $("#ACPB_N").val("")
                    //alert(values);
                    $("#table_div").html("Loading Data.......");
                    $.ajax({
                          url: "research_publication/apb/apb_select_db.php",
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
        else if($("#apb_save").val()=="Update")
        {
           var session_des = $(this).attr("id");
           $.ajax({
                    url: "research_publication/apb/apb_update.php",
                    type: "post",
                    data: values,
                    success: function()
                    {
                    alert("Data Updated Successfully.");  
                    
                    $("#session").val("");
                    $("#APB_TNO").val("");
                    $("#APB_BEP").val("");
                    $("#APB_ISSN").val("");
                    $("#APB_WPR").val("");
                    $("#APB_NOC").val("");
                    $("#ACPB_Y").val("");
                    $("#ACPB_N").val("")
                    $("#table_div").html("Loading Data.......");
                    $.ajax({
                          url: "research_publication/apb/apb_select_db.php",
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
        });

     </script>





<center><h4><b>Research Publication And Academic Contribution</b></h4></center>
    <div class="row-fluid">
        <div class="col-md-11">
			<!--Articles/Chapters Section Started --> 
					<div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
				<div class="panel-heading">	
				  <h4 id="articles" class="panel-title" align="center">Articles / Chapters published in Books</h4>
				</div><br>
				
				  <form role="form" method="post" name="apb" id ="apb" saction="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
						
						
                <label>Session</label>
              
                <select id="" style="width: 220px">          
                  
                  <?php 
                    include('../../DBConnect.php');
                    //$uname=$_SESSION['username'];
                    $query = mysqli_query($conn,"SELECT session_description from session_master");
                    while($row = mysqli_fetch_assoc($query)){

                  ?>
                  
                  <option name="session" id="<?php echo $row["session_description"]; ?>" ><?php echo $row['session_description']; ?></option>
                  <?php } ?>
                </select>
                </br>


						<div class="form-group">
							<div id="apb">
  								

                  <label>Title With Page Numbers </label>
  								  <input type="text" class="form-control required" name="APB_TNO" id="APB_TNO" required="required"/>
  								<label>Book Title, Editor And Publisher </label>
  								  <input type="text" class="form-control" name="APB_BEP" id="APB_BEP" required="required"/>
  								<label>ISSN / ISBN No.</label> 
  								   <input type="text" class="form-control" name="APB_ISSN" id="APB_ISSN" required="required"/>
  								<label>Whether peer reviewed. Impact factor, if any</label>
  								  <input type="text" class="form-control" name="APB_WPR" id="APB_WPR" required="required"/>
  								<label>No. of Co-authors </label>
  								   <input type="text" class="form-control" name="APB_NOC" id="APB_NOC" required="required"/>
  								<label>Whether you are the main Author</label> 
  								  <input type="radio" value="Yes" name="ACPB_Y" id="ACPB_Y" required="required"/>Yes 
  								  <input type="radio" value="No" name="ACPB_N" id="ACPB_N"  />No<br />
  							</div>
              </br>
						<input class="btn btn-md btn-primary" type="submit" value="Save" name="apb_save" id="apb_save" />
						
						
						<input type="reset" class="btn btn-primary" value="Reset" name="reset" />
				   </form>
				   </div>			
		</div>
        </div><!--End Of col-md-6 --> 
			
    </div><!--End Of row-fluid Class --> 
</div>

<div class="view">
  <div class="full col-sm-12" id="table_div">

  </div>
</div> 
<!-- Tabssle End -->
<div id="temp">

</div>

<?php 
   }  //else
?>                               		