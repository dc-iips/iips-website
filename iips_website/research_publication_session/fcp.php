<center><h4><b>Research Publication And Academic Contribution</b></h4></center>
	</div><!--end of box-shadow-->
    <div class="row-fluid">        
        <div class="col-md-11">
            			
		<!--"Full Papers in Conference" form started -->
		<div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
				<div class="panel-heading">						
				  <h4 id="fullPapers" class="panel-title" align="center">Full Papers in Conference Proceedings</h4>
				</div><br>
				  <form method="post" name="fpcp" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
					  <input class="btn btn-md btn-primary" type="submit" value="Save" name="fpcp_save" />
						<select name="fp" onChange="showUser(this.value, this.name)">
							<option>--Title--</option>
							<?php 
								$sql3 = mysqli_query($con,"SELECT * from teach_fcp where year='$year' and user_id='$user'");
								while($row = mysqli_fetch_assoc($sql3)){
									?><option><?php echo $row['Teach_FCP_TNO']; ?></option>
							<?php } ?>
						</select>
						<input class="btn btn-md btn-primary" type="button" value="Delete" name="fcp_delete" /> 
						<input type="reset" class="btn btn-primary" value="Reset" name="reset" /> <br/><br/>
					  <div id="fullPapersConf">
    						<label> Title With Page Numbers</label>
    							<input class="form-control" type="text" name="FCP_TNO" required="required"/> 
    						<label>Details of Conference publications</label>  
    							<input class="form-control" type="text" name="FCP_BEP" required="required"/> 
    						<label>ISSN / ISBN No. </label>
    							<input class="form-control" type="text" name="FCP_ISSN" required="required"/> 
    						<label>No. of Co-authors </label>
    							<input class="form-control" type="text" name="FCP_NOC" required="required"/> <br/>
    						 <label> Whether you are the main Author</label>
    						 <input type="radio" name="FCP_YN" required="required"/>Yes <input type="radio" name="FCP_YN"/>No<br /> <br/>
					  </div>
						<input class="btn btn-md btn-primary" type="submit" value="Save" name="fpcp_save" />
						<select name="fp" onChange="showUser(this.value, this.name)">
							<option>--Title--</option>
							<?php 
								$sql3 = mysqli_query($con,"SELECT * from teach_fcp where year='$year' and user_id='$user'");
								while($row = mysqli_fetch_assoc($sql3)){
									?><option><?php echo $row['Teach_FCP_TNO']; ?></option>
							<?php } ?>
						</select>
						<input class="btn btn-md btn-primary" type="button" value="Delete" name="fcp_delete" /> 
						<input type="reset" class="btn btn-primary" value="Reset" name="reset" />
					</form> 
				</div><!--end of panel-->
			
        </div><!--End Of col-md-6 --> 
		
		
			
    </div><!--End Of row-fluid Class --> 
</div>
<!--End Of container --> 