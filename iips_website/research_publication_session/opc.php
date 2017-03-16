<center><h4><b>Research Publication And Academic Contribution</b></h4></center>
	</div><!--end of box-shadow-->
    <div class="row-fluid">
        <div class="col-md-11">
			 <!--"Ongoing Projects" Panel started -->		 
				<div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
				<div class="panel-heading">
				  <h4 id="ongoing" class="panel-title" align="center">Ongoing Projects / Consultancies</h4>			
				</div><br>
				  <form id="ongoingForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
					  <input class="btn btn-md btn-primary" type="submit" value="Save" name="opc_save" />
							<select name="op" onchange="showUser(this.value,this.name)">
								<option>--Title--</option>
								<?php 
									include('DBConnect.php');
									$query = mysqli_query($con,"SELECT * from teach_opc where User_Id='$user' and year='$year'");
									while($row = mysqli_fetch_assoc($query)){
								?><option><?php echo $row['Teach_OPC_Title']; ?></option>
								<?php } ?>
							</select>
							<input class="btn btn-md btn-primary" type="submit" value="Delete" name="opc_delete" />
							<input class="btn btn-md btn-primary" type="reset" value="Reset" name="reset" /> <br/><br/>
					  <div id="ongoingFields">
							<label>Title</label>
							  <input class="form-control" type="text" name="OPC_Title" required="required"/> 
							<label>Agency</label>
							  <input class="form-control" type="text" name="OPC_Agency" required="required"/> 
							<label>Period</label>
							  <input class="form-control" type="text" name="OPC_Period" required="required"/> 
							<label>Grant / Amount Mobilized (Rs. Lakh)</label>
							  <input class="form-control" type="text" name="OPC_GAM" required="required"/> 
						 </div> <br />
							<input class="btn btn-md btn-primary" type="submit" value="Save" name="opc_save" />
							<select name="op" onchange="showUser(this.value,this.name)">
								<option>--Title--</option>
								<?php 
									include('DBConnect.php');
									$query = mysqli_query($con,"SELECT * from teach_opc where User_Id='$user' and year='$year'");
									while($row = mysqli_fetch_assoc($query)){
								?><option><?php echo $row['Teach_OPC_Title']; ?></option>
								<?php } ?>
							</select>
							<input class="btn btn-md btn-primary" type="submit" value="Delete" name="opc_delete" />
							<input class="btn btn-md btn-primary" type="reset" value="Reset" name="reset" /> 
				  </form>
				</div><!--end of panel-->
        </div><!--End Of col-md-6 --> 
		
		
			
    </div><!--End Of row-fluid Class --> 
</div>
<!--End Of container -->