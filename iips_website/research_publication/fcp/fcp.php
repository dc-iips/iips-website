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
                  url: "research_publication/fcp/fcp_select_db.php",
                  type: "post",
                  data: { },
                    success: function(msg)
                    {
                      $("#table_div").html(msg).show(500);    
                    }
                });//end of ajax
              });//end of ready
        $("#fpcp").submit(function(event){
              /* stop form from submitting normally */
               event.preventDefault();
               var values = $(this).serialize();
               //alert(values);
               
              if($("#fpcp_save").val()=="Save"){
               
               $.ajax({
                    url: "research_publication/fcp/fcp_insert_db.php",
                    type: "post",
                    data: values,
                    success: function()
                    {
                    alert("Data Added Successfully.");

                    $("#session").val("");
                    $("#FCP_TNO").val("");
                    $("#FCP_BEP").val("");
                    $("#FCP_ISSN").val("");
                    $("#FCP_NOC").val("");
                    $("#FCP_Y").val("");
                    $("#FCP_N").val("");
                    //alert(values);
                    $("#table_div").html("Loading Data.......");
                    $.ajax({
                          url: "research_publication/fcp/fcp_select_db.php",
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
        else if($("#fpcp_save").val()=="Update")
        {
           var session_des = $(this).attr("id");
           $.ajax({
                    url: "research_publication/fcp/fcp_update.php",
                    type: "post",
                    data: values,
                    success: function()
                    {
                    alert("Data Updated Successfully.");  
                    
                    $("#session").val("");
                    $("#FCP_TNO").val("");
                    $("#FCP_BEP").val("");
                    $("#FCP_ISSN").val("");
                    $("#FCP_NOC").val("");
                    $("#FCP_Y").val("");
                    $("#FCP_N").val("");
                    
                    $("#table_div").html("Loading Data.......");
                    $.ajax({
                          url: "research_publication/fcp/fcp_select_db.php",
                          type: "post",
                          data: {},
                          success: function(msg)
                           {
                              $("#table_div").html(msg).show(500);    
                          }
                    });//end of ajax
                    }//end of function
                }); //End of .ajax
          
      
        }//end of elseif
        
        });//end of submit
     </script>




<center id="slide_up"><h4><b>Research Publication And Academic Contribution</b></h4></center>
	</div><!--end of box-shadow-->
    <div class="row-fluid">        
        <div class="col-md-11">
            			
		<!--"Full Papers in Conference" form started -->
		<div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
				<div class="panel-heading">						
				  <h4 id="fullPapers" class="panel-title" align="center">Full Papers in Conference Proceedings</h4>
				</div><br>
				  <form method="post" name="fpcp" id="fpcp" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
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



					  <div id="fullPapersConf">
    						<label> Title With Page Numbers</label>
    							<input class="form-control" type="text" name="FCP_TNO" id="FCP_TNO" required="required"/> 
    						<label>Details of Conference publications</label>  
    							<input class="form-control" type="text" name="FCP_BEP" id="FCP_BEP" required="required"/> 
    						<label>ISSN / ISBN No. </label>
    							<input class="form-control" type="text" name="FCP_ISSN" id="FCP_ISSN" required="required"/> 
    						<label>No. of Co-authors </label>
    							<input class="form-control" type="text" name="FCP_NOC" id="FCP_NOC" required="required"/> <br/>
    						 <label> Whether you are the main Author</label>
    						 <input type="radio" name="FCP_YN" id="FCP_Y" required="required"/>Yes <input type="radio" name="FCP_YN" id="FCP_N"/>No<br /> <br/>
					  </div>
						<input class="btn btn-md btn-primary" type="submit" value="Save" id="fpcp_save"name="fpcp_save" />
							
						
						<input type="reset" class="btn btn-primary" value="Reset" name="reset" id="reset"/>
					</form> 
				</div><!--end of panel-->
			
        </div><!--End Of col-md-6 --> 
		
		
			
    </div><!--End Of row-fluid Class --> 
</div>
<!--End Of container --> 
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