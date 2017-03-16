<center><h4><b>Research Publication And Academic Contribution</b></h4></center>
	</div>
    <div class="row-fluid">
        <div class="col-md-11">
			 <!--"Invited Lectures and Chairmanship" Panel started -->		 
				<div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
				<div class="panel-heading">
				  <h4 id="invitedLectures"  align="center" >Invited Lectures and Chairmanship at National or International Conference/ Seminar</h4>
				</div><br>
				  <form id="invitedForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post"  >
				  	<input class="btn btn-md btn-primary" type="submit" value="Save" name="ilc_save" />
							<select name="il" onchange="showUser(this.value,this.name)">
								<option>--Title--</option>
								<?php 
									include('DBConnect.php');
									$query = mysqli_query($con,"SELECT * from teach_ilc where user_id='$user' and year='$year'");
									while($row = mysqli_fetch_assoc($query)){
								?><option><?php echo $row['Teach_ILC_TOL']; ?></option>
								<?php } ?>
							</select>
							<input class="btn btn-md btn-primary" type="submit" value="Delete" name="ilc_delete" />
							<input class="btn btn-md btn-primary" type="reset" value="Reset" name="reset" /> <br/><br/>
					   <div id="invitedFields">
    						   <label>Title of the Lecture / Academic Session</label>
    							<input class="form-control" type="text" name="ILC_TOL" required="required"/> 
    						   <label>Title Conference / Seminar etc.</label>
    							<input class="form-control" type="text" name="ILC_TCS" required="required"/> 
    							<label>Date (s) of the Event</label>
    							 <input class="form-control" type="text" name="ILC_DOE" required="required"/> 
    						   <label>Organized By</label>
    							 <input class="form-control" type="text" name="ILC_Organized" required="required"/> 
    						  <label> Whether International / National / State</label>
    							<input class="form-control" type="text" name="ILC_WINS" required="required"/> 
    						 <div> <br />
							<input class="btn btn-md btn-primary" type="submit" value="Save" name="ilc_save" />
							<select name="il" onchange="showUser(this.value,this.name)">
								<option>--Title--</option>
								<?php 
									include('DBConnect.php');
									$query = mysqli_query($con,"SELECT * from teach_ilc where user_id='$user' and year='$year'");
									while($row = mysqli_fetch_assoc($query)){
								?><option><?php echo $row['Teach_ILC_TOL']; ?></option>
								<?php } ?>
							</select>
							<input class="btn btn-md btn-primary" type="submit" value="Delete" name="ilc_delete" />
							<input class="btn btn-md btn-primary" type="reset" value="Reset" name="reset" /> 
				   </form>
				</div>
        </div><!--End Of col-md-6 --> 
		
		
			
    </div><!--End Of row-fluid Class --> 
</div>
<!--End Of container --> 