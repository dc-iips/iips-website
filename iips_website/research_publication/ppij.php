	<center><h4><b>Research Publication And Academic Contribution</b></h4></center>
     <div class="row-fluid">
       
        <div class="col-md-11">
            <!--Published Papers Panel started -->
				<div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
				<div class="panel-heading">
				  <h3  id="papers" class="panel-title" align="center">Published Papers in Journals</h3>
				</div><!--end of panel heading-->
				
					  <form role="form" name="ppij"  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
						<br>
						<input class="btn btn-primary" type="submit" value="Save" name="ppij_save" />
						<select name="pp" onChange="showUser(this.value, this.name)">
							<option>--Title--</option>
							<?php 
								include('../DBConnect.php');
								$uname=$_SESSION['username'];
								$year=$_SESSION['pbasYear'];
								$query = mysqli_query($con,"SELECT * from teach_ppij where User_Id='$uname' and year='$year'");
								while($row = mysqli_fetch_assoc($query)){
							?><option><?php echo $row['Teach_PPIJ_TNO']; ?></option>
							<?php } ?>
						</select>
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
						<select name="pp" onChange="showUser(this.value, this.name)">
							<option>--Title--</option>
							<?php 
								include('../DBConnect.php');
								$uname=$_SESSION['username'];
								$year=$_SESSION['pbasYear'];
								$query = mysqli_query($con,"SELECT * from teach_ppij where user_id='$uname' and year='$year'");
								while($row = mysqli_fetch_assoc($query)){
							?><option><?php echo $row['Teach_PPIJ_TNO']; ?></option>
							<?php } ?>
						</select>
						<input type="submit" class="btn btn-primary"  value="Delete" name="ppij_delete" />
						<input type="reset" class="btn btn-primary" value="Reset" name="reset" />
					   </div>
					</form>
				</div><!--end of panel div-->		
		
    </div><!--End Of row-fluid Class --> 
</div>
</div>                         		