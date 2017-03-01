<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:header.php/#FacultyModal");
    }
    else
    {
 ?>
    <script language="javascript">    
              function getDataTable(fileName,contentPan))
              {              	
                $("#"+contentPan).html("loading table......");
              	$.ajax({
              		url: fileName,
              		method:"post",
              		data:urlencode(),

              		success: function(msg){
                      $("#"+contentPan).html(msg).show(500);
                    }

                });
              }
    </script>
    <center><h4><b>Research Publication And Academic Contribution</b></h4></center>
     <div class="row-fluid">
       
        <div class="col-md-11">
            <!--Published Papers Panel started -->
				<div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
				<div class="panel-heading">
				  <h3  id="papers" class="panel-title" align="center">Published Papers in Journals</h3>
				</div><!--end of panel heading-->
				
					  <form role="form" name="ppij"  id="ppij_submit" action="research_publication/ppij_insert_db.php" method="post">
						<br>
						<input class="btn btn-primary" type="submit" value="Save" name="ppij_save" />
					
						<input type="submit" class="btn btn-primary"  value="Delete" name="ppij_delete" />
						<input type="reset" class="btn btn-primary" value="Reset" name="reset" /> <br/><br/>
						<div class="form-group">
							<div id="ppij">
								<label>Title With Page Numbers</label> 
								  <input type="text" class="form-control required" name="PPIJ_TNO" autofocus required="required"/>
								<label>Journal</label>
								  <input type="text" class="form-control required" name="PPIJ_Journal" required="required"/>
								<label>ISSN / ISBN No. </label>
								  <input type="text" class="form-control required" name="PPIJ_ISBN" required="required"/>
								<label> Whether peer reviewed? Impact factor, if any</label>
								  <input type="text" class="form-control required" name="PPIJ_PR" required="required"/>
								<label>No. of Co-authors</label>
								  <input type="text" class="form-control required" name="PPIJ_NCA" required="required"/>
								<br/><label>Whether you are the main Author</label>
								  <input type="radio" value="Yes" name="PPIJ_YN" required="required">Yes <input type="radio" value="No" name="PPIJ_YN">NO<br />
								</div>
								<br>						
						<input class="btn btn-primary" type="submit" value="Save" name="ppij_save" />						
						<input type="submit" class="btn btn-primary"  value="Delete" name="ppij_delete" />
						<input type="reset" class="btn btn-primary" value="Reset" name="reset"  onClick="getDataTable('ppij_select_db.php','tab1')" />
					   </div>
					</form>

				</div><!--end of panel div-->		
		
    </div><!--End Of row-fluid Class --> 

<!-- Table -->
<!-- 
<div class="padding">
  <div class="full col-sm-11" id="tab1">

  </div>
</div> -->
<!-- Table End -->

<?php 
	include 'ppij_select_db.php';
 ?>
</div>
</div>  

<?php } ?>
