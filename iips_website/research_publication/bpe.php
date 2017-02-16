<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Student Master</title>
        <script src="jquery-1.3.1.js"></script>
    </head>
    <body>
        <div id="mainContainer">
            <div>
          <div class="col-md-8">
			<!--"Books Published" Panel started -->		
				<div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
				<div class="panel-heading">
				  <h4 id="books" class="panel-title" align="center">Books Published as Single Author or as a Editor</h4>
				</div><br>
				
				  <form id="booksForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
					 <input class="btn btn-md btn-primary" type="submit" value="Save" name="bpe_save" />
						<select name="bp" onChange="showUser(this.value, this.name)">
							<option>--Title--</option>
							<?php 
								$uname=$_SESSION['username'];
								$year=$_SESSION['pbasYear'];
								$sql4 = mysqli_query($con,"SELECT * from teach_bpe where User_Id='$uname' and year='$year'");
								while($row = mysqli_fetch_assoc($sql4)){
							?><option><?php echo $row['Teach_BPE_TPN']; ?></option>
							<?php } ?>
						</select>
						<input class="btn btn-md btn-primary" type="submit" value="Delete" name="bpe_delete" />
						<input type="reset" class="btn btn-primary" value="Reset" name="reset" /> <br/><br/>
					 <div id="bookPublished">
						<label>Title With Page Numbers</label>
						  <input class="form-control" type="text" name="BPE_TPN"> 
						<label>Type of Book And Authorship</label>
						  <input class="form-control" type="text" name="BPE_TBA"> 
						<label>Publisher And ISSN / ISBN No</label>
						  <input class="form-control" type="text" name="BPE_PISSN" /> 
						<label> Whether Peer Reviewed</label>
						 <input class="form-control" type="text" name="BPE_WPR" /> 
						<label>No. of Co-authors</label>
						  <input class="form-control" type="text" name="BPE_NOC" /> <br/>
					   <label>Whether you are the main Author</label>
						 <input type="radio" name="BPE_YN" />Yes <input type="radio" name="BPE_YN"/>No<br /> <br/>
					   <label>API Score</label>  <input class="form-control" type="text" name="BPE_API" id="bpetooltip" /> 
					 </div><br />
						<input class="btn btn-md btn-primary" type="submit" value="Save" name="bpe_save" />
						<select name="bp" onChange="showUser(this.value, this.name)">
							<option>--Title--</option>
							<?php 
								$uname=$_SESSION['username'];
								$year=$_SESSION['pbasYear'];
								$sql4 = mysqli_query($con,"SELECT * from teach_bpe where User_Id='$uname' and year='$year'");
								while($row = mysqli_fetch_assoc($sql4)){
							?><option><?php echo $row['Teach_BPE_TPN']; ?></option>
							<?php } ?>
						</select>
						<input class="btn btn-md btn-primary" type="submit" value="Delete" name="bpe_delete" />
						<input type="reset" class="btn btn-primary" value="Reset" name="reset" />
				  </form>
				</div><!--end of panel-->
        </div><!--End Of col-md-6 --> 	
            </div>
        </div>
        <script>
            /*Populating Table on Page Load*/
            $("#tableContainer").html("Loading Data.......");
            $.ajax({
                            type: "POST",
                            url: "showData.php",
                            success: function(msg){
							
                                  $("#tableContainer").html(msg).show(10000);
                            }
                        }); 
                        
            $("#insertStudent").submit(function(event){
                /* stop form from submitting normally */
                event.preventDefault();
                var values = $(this).serialize();
                $.ajax({
                  url: "addStudent.php",
                  type: "post",
                  data: values,
                  success: function(){
                      alert("Student Added Successfully.");
                      $("#tableContainer").html("Loading Data.......");
                       $.ajax({
                            type: "POST",
                            url: "showData.php",
                            success: function(msg){
                                  $("#tableContainer").html(msg).show();
                            }
                        }); // end of inner .ajax
                  }
                }); //End of .ajax
        });
        </script>
    </body>
</html> 