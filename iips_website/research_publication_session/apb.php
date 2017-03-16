
	<center><h4><b>Research Publication And Academic Contribution</b></h4></center>
    <div class="row-fluid">
        <div class="col-md-11">
			<!--Articles/Chapters Section Started -->
					<div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
				<div class="panel-heading">	
				  <h4 id="articles" class="panel-title" align="center">Articles / Chapters published in Books</h4>
				</div><br>
				
				  <form role="form" method="post" name="apb" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
						<input class="btn btn-md btn-primary" type="submit" value="Save" name="acpb_save" />
						<select name="apb" onChange="showUser(this.value, this.name)">
						<option value="">Select Article:</option>
						 <?php
							 include('DBConnect.php');
							$sql2 = mysqli_query($con,"Select * from teach_apb where user_id='$user' and year='$year'");
							while($row = mysqli_fetch_assoc($sql2)){ ?>
							<option><?php echo $row['Teach_APB_TNO']; ?></option>		
						<?php } ?>
						</select>
						<input type="submit" class="btn btn-primary"  value="Delete" name="apb_delete" />
						<input type="reset" class="btn btn-primary" value="Reset" name="reset" /><br/><br/>
						<div class="form-group">
							<div id="apb">
  								<label>Title With Page Numbers </label>
  								  <input type="text" class="form-control required" name="APB_TNO" required="required"/>
  								<label>Book Title, Editor And Publisher </label>
  								  <input type="text" class="form-control" name="APB_BEP" required="required"/>
  								<label>ISSN / ISBN No.</label> 
  								   <input type="text" class="form-control" name="APB_ISSN" required="required"/>
  								<label>Whether peer reviewed. Impact factor, if any</label>
  								  <input type="text" class="form-control" name="APB_WPR" required="required"/>
  								<label>No. of Co-authors </label>
  								   <input type="text" class="form-control" name="APB_NOC" required="required"/>
  								<label>Whether you are the main Author</label> 
  								  <input type="radio" value="Yes" name="ACPB_YN" required="required"/>Yes 
  								  <input type="radio" value="No" name="ACPB_YN" />No<br />
  							</div>
              </br>
						<input class="btn btn-md btn-primary" type="submit" value="Save" name="acpb_save" />
						<select name="apb" onChange="showUser(this.value, this.name)">
						<option value="">Select Article:</option>
						 <?php
							 include('DBConnect.php');
							$sql2 = mysqli_query($con,"Select * from teach_apb where user_id='$user' and year='$year'");
							while($row = mysqli_fetch_assoc($sql2)){ ?>
							<option><?php echo $row['Teach_APB_TNO']; ?></option>		
						<?php } ?>
						</select>
						<input type="submit" class="btn btn-primary"  value="Delete" name="apb_delete" />
						<input type="reset" class="btn btn-primary" value="Reset" name="reset" />
				   </form>
				   </div>			
		</div>
        </div><!--End Of col-md-6 --> 
			
    </div><!--End Of row-fluid Class --> 
</div>

</body>
</html>                                		