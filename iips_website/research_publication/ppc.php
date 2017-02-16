<center><h4><b>Research Publication And Academic Contribution</b></h4></center>
	</div><!--end of box-shadow-->
    <div class="row-fluid">
        <div class="col-md-11">
			 <!--"Papers Presented in Conferences" Panel started -->			 
				<div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
				<div class="panel-heading">
				  <h4 id="papersPresented" class="panel-title" align="center">Papers Presented in Conferences, Seminars, Workshops, Symposia</h4>
				</div><br>
				  <form id="presentedForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
					   
					   <input class="btn btn-md btn-primary" type="submit" value="Save" name="ppc_save" />
							<select name="pc" onchange="showUser(this.value,this.name)">
								<option>--Title--</option>
								<?php 
									include('DBConnect.php');
									$query = mysqli_query($con,"SELECT * from teach_ppc where user_id='$user' and year='$year'");
									while($row = mysqli_fetch_assoc($query)){
								?><option><?php echo $row['Teach_PPC_TPP']; ?></option>
								<?php } ?>
							</select>
							<input class="btn btn-md btn-primary" type="submit" value="Delete" name="ppc_delete" />
							<input class="btn btn-md btn-primary" type="reset" value="Reset" name="reset" /> <br/><br/>
					   <div id="presentedFields">
    						   <label>Title of the Paper Presented</label>
    							<input class="form-control"t type="text" name="PPC_TPP" required="required"/>  
    						   <label>Title Conference / Seminar etc.</label> 
    							 <input class="form-control" type="text" name="PPC_TCS" required="required"/>  
    						   <label>Date (s) of the Event </label>
    							 <input class="form-control" type="text" name="PPC_DOE" required="required"/>  
    						   <label>Organized By</label>
    							 <input class="form-control" type="text" name="PPC_Organized" required="required"/>  
    						   <label>Whether International / National / State</label>
    							<input class="form-control" type="text" name="PPC_WINS" required="required"/>   
    						</div><br />
							<input class="btn btn-md btn-primary" type="submit" value="Save" name="ppc_save" />
							<select name="pc" onchange="showUser(this.value,this.name)">
								<option>--Title--</option>
								<?php 
									include('DBConnect.php');
									$query = mysqli_query($con,"SELECT * from teach_ppc where user_id='$user' and year='$year'");
									while($row = mysqli_fetch_assoc($query)){
								?><option><?php echo $row['Teach_PPC_TPP']; ?></option>
								<?php } ?>
							</select>
							<input class="btn btn-md btn-primary" type="submit" value="Delete" name="ppc_delete" />
							<input class="btn btn-md btn-primary" type="reset" value="Reset" name="reset" /> 
					</form>
				
        </div><!--End Of col-md-6 --> 
		
		
			
    </div><!--End Of row-fluid Class --> 
</div>
<!--End Of container --> 