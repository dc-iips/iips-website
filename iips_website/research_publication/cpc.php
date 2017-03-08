<center><h4><b>Research Publication And Academic Contribution</b></h4></center>
	</div><!--end of box-shadow-->
    <div class="row-fluid">
        <div class="col-md-11">
			  <!--"Completed Projects" Panel started -->
			 		<div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
				<div class="panel-heading">	
				  <h4 id="completed" class="panel-title" align="center">Completed Projects / Consultancies</h4>				
				</div><br>
				  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
					   <input class="btn btn-md btn-primary" type="submit" value="Save" name="cpc_save" />
						<select name="cp" onchange="showUser(this.value,this.name)">
							<option>--Title--</option>
							<?php 
								include('DBConnect.php');
								$query = mysqli_query($con,"SELECT * from teach_cpc where user_id='$user' and year='$year'");
								while($row = mysqli_fetch_assoc($query)){
							?><option><?php echo $row['Teach_CPC_Title']; ?></option>
							<?php } ?>
						</select>
						<input class="btn btn-md btn-primary" type="submit" value="Delete" name="cpc_delete" />
						<input class="btn btn-md btn-primary" type="reset" value="Reset" name="reset" /> <br/><br/>
					   <div id="completedFields">
						 <label>Title</label>
						   <input class="form-control" type="text" name="CPC_Title" required="required"/> 
						 <label>Agency</label>
						   <input class="form-control" type="text" name="CPC_Agency" required="required"/> 
						   
						 
						 <label>Duration</label>
						   
						  <br>
	 <select name="DOBMonth"  name="FDP_Duration">
	<option> - Month - </option>
	<option value="January">0 month</option>
	<option value="Febuary">1 month</option>
	<option value="March">2 months</option>
	<option value="April">3 months</option>
	<option value="May">4 months</option>
	<option value="June">5 months</option>
	<option value="July">6 months</option>
	<option value="August">7 months</option>
	<option value="September">8 months</option>
	<option value="October">9 months</option>
	<option value="November">10 months</option>
	<option value="December">11 months</option>
</select>
 &nbsp
 <select name="DOBdays"  name="FDP_Duration">
	<option> - Days - </option>
	<option value="one">1 day</option>
	<option value="two">2 days</option>
	<option value="three">3 days</option>
	<option value="four">4 days</option>
	<option value="five">5 days</option>
	<option value="six">6 days</option>
	<option value="seven">7 days</option>
	<option value="eight">8 days</option>
	<option value="nine">9 days</option>
	<option value="ten">10 days</option>
	<option value="eleven">11 days</option>
	<option value="twelve">12 days</option>
     <option value="Jan">13 day</option>
	<option value="Feb">14 days</option>
	<option value="Mar">15 days</option>
	<option value="Apr">16 days</option>
	<option value="Ma">17 days</option>
	<option value="Jun">18 days</option>
	<option value="Jul">19 days</option>
	<option value="Aug">20 days</option>
	<option value="Sept">21 days</option>
	<option value="Oct">22 days</option>
	<option value="Nov">23 days</option>
	<option value="Dec">24 days</option>
    <option value="t25">25 days</option>
    <option value="t26">26 days</option>
    <option value="t27">27 days</option>
    <option value="t28">28 days</option>
    <option value="t29">29 days</option>
    <option value="t30">30 days</option>

     </select>





<br>
		<br>				 
						 <label>Grant / Amount Mobilized (Rs. Lakh)</label>
						   <input class="form-control" type="text" name="CPC_GAM" required="required"/> 
						 <label>Whether policy document / Patent as outcome</label>
						   <input class="form-control" type="text" name="CPC_WPD" required="required"/> 
						</div> 
						 <br />
						<input class="btn btn-md btn-primary" type="submit" value="Save" name="cpc_save" />
						<select name="cp" onchange="showUser(this.value,this.name)">
							<option>--Title--</option>
							<?php 
								include('DBConnect.php');
								$query = mysqli_query($con,"SELECT * from teach_cpc where user_id='$user' and year='$year'");
								while($row = mysqli_fetch_assoc($query)){
							?><option><?php echo $row['Teach_CPC_Title']; ?></option>
							<?php } ?>
						</select>
						<input class="btn btn-md btn-primary" type="submit" value="Delete" name="cpc_delete" />
						<input class="btn btn-md btn-primary" type="reset" value="Reset" name="reset" /> 
				  </form>
				</div><!--end of panel-->
        </div><!--End Of col-md-6 --> 
		
		
			
    </div><!--End Of row-fluid Class --> 
</div>
<!--End Of container --> 
