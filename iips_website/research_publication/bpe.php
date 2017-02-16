
	<center><h4><b>Research Publication And Academic Contribution</b></h4></center>
	</div><!--end of box-shadow-->
    <div class="row-fluid">        
        <div class="col-md-11">
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
					  </div>
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
		
		
			
    </div><!--End Of row-fluid Class --> 
</div>                       		