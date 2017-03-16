<center><h4><b>Research Publication And Academic Contribution</b></h4></center>
	</div><!--end of box-shadow-->
    <div class="row-fluid">
        <div class="col-md-11">
			 <!--"Research Guidance" Panel started -->
			 
			 		<div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
				<div class="panel-heading">			
				  <h3 class="panel-title" align="center">Research Guidance</h3>				
				</div><br>
				  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
					   <input class="btn btn-md btn-primary" type="submit" value="Save" name="rg_save" />
							<select name="rg" onchange="showUser(this.value,this.name)">
								<option>--Title--</option>
								<?php 
									include('DBConnect.php');
									$query = mysqli_query($con,"SELECT * from teach_rg where user_id='$user' and year='$year'");
									while($row = mysqli_fetch_assoc($query)){
								?><option><?php echo $row['Teach_RG_NE']; ?></option>
								<?php } ?>
							</select>
							<input class="btn btn-md btn-primary" type="submit" value="Delete" name="rg_delete" />
							<input class="btn btn-md btn-primary" type="reset" value="Reset" name="guidanceReset" /> <br/><br/> 
					   <div id="GuidanceFields">
    						   <label>Number Enrolled</label>
    							<input class="form-control" type="text" name="RG_NE" required="required"/> 
    						   <label>Thesis Submitted</label>
    							<input class="form-control" type="text" name="RG_TS" required="required"/> 
    						   <label>Degree Awarded</label>  
    							 <input class="form-control" type="text" name="RG_DA" required="required"/>  
						  </div> 
						 <br />
							<input class="btn btn-md btn-primary" type="submit" value="Save" name="rg_save" />
							<select name="rg" onchange="showUser(this.value,this.name)">
								<option>--Title--</option>
								<?php 
									include('DBConnect.php');
									$query = mysqli_query($con,"SELECT * from teach_rg where user_id='$user' and year='$year'");
									while($row = mysqli_fetch_assoc($query)){
								?><option><?php echo $row['Teach_RG_NE']; ?></option>
								<?php } ?>
							</select>
							<input class="btn btn-md btn-primary" type="submit" value="Delete" name="rg_delete" />
							<input class="btn btn-md btn-primary" type="reset" value="Reset" name="guidanceReset" /> 
				  </form>
				</div><!--end of panel-->
        </div><!--End Of col-md-6 --> 
		
		
			
    </div><!--End Of row-fluid Class --> 
</div>                             		