<center><h4><b>Research Publication And Academic Contribution</b></h4></center>
	</div><!--end of box-shadow-->
    <div class="row-fluid">
        <div class="col-md-11">
			 <!--"Training Courses , Teaching-Learning" Panel started -->		 
				<div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
				<div class="panel-heading">
				  <h4 id="training" class="panel-title" align="center">Training Courses , Teaching-Learning-Evaluation Technology, Faculty Development Programmes</h4>
				</div><br>
				  <form id="trainingForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
					  <input  class="btn btn-md btn-primary" type="submit" value="Save" name="fdp_save" />
							<select name="ppf" onchange="showUser(this.value,this.name)">
								<option>--Title--</option>
								<?php 
									include('DBConnect.php');
									$query = mysqli_query($con,"SELECT * from teach_fdp where user_id='$user' and year='$year'");
									while($row = mysqli_fetch_assoc($query)){
								?><option><?php echo $row['Teach_FDP_Programme']; ?></option>
								<?php } ?>
							</select>
							<input class="btn btn-md btn-primary" type="submit" value="Delete" name="fdp_delete" />
							<input class="btn btn-md btn-primary" type="reset" value="Reset" name="trainingReset" /><br/><br/>
					   <div id="trainingFields">
    							<label>Programme </label>
    							 <input class="form-control" type="text" name="FDP_Programme" required="required"/> 
    						   <label> Duration </label>
    							<input class="form-control" type="text" name="FDP_Duration" required="required"/> 
    							<label>Organized By </label>
    							 <input class="form-control" type="text" name="FDP_Organized" required="required"/>  
    							</div>
						 <br>
							<input  class="btn btn-md btn-primary" type="submit" value="Save" name="fdp_save" />
							<select name="ppf" onchange="showUser(this.value,this.name)">
								<option>--Title--</option>
								<?php 
									include('DBConnect.php');
									$query = mysqli_query($con,"SELECT * from teach_fdp where user_id='$user' and year='$year'");
									while($row = mysqli_fetch_assoc($query)){
								?><option><?php echo $row['Teach_FDP_Programme']; ?></option>
								<?php } ?>
							</select>
							<input class="btn btn-md btn-primary" type="submit" value="Delete" name="fdp_delete" />
							<input class="btn btn-md btn-primary" type="reset" value="Reset" name="trainingReset" /> 
				  </form>
				</div><!--end of panel-->
        </div><!--End Of col-md-6 --> 
		
		
			
    </div><!--End Of row-fluid Class --> 
</div>
<!--End Of container -->                              		