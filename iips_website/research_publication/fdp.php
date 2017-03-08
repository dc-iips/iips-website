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
    							 <br>
    						   <label> Duration </label>
    						   <br>
    							<!-- <input class="form-control" type="text" name="FDP_Duration" required="required"/> --> 
    							
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
     <option value="Jan">13 days</option>
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