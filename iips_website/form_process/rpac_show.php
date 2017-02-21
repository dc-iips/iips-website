<?php
	session_start();
	ob_start();
	$val=$_GET["val"];
	$name = $_GET['name'];
	$user=$_SESSION['username'];
	$year=$_SESSION['pbasYear'];
	#Database Connection
	include('DBConnect.php');
?>

<!-- Script for showing data for "Published Papers in Journal" tab -->

<?php
	if($name == 'pp'){
		$sql="SELECT * FROM teach_ppij WHERE user_id='$user' and Teach_PPIJ_TNO = '$val' and year='$year'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		 $row = mysqli_fetch_array($result);
 		$PPIJ_TNO = $row['Teach_PPIJ_TNO'];
	    $PPIJ_Journal = $row['Teach_PPIJ_Journal'];
		$PPIJ_ISBN = $row['Teach_PPIJ_ISBN'];
		$PPIJ_PR = $row['Teach_PPIJ_PR'];
		$PPIJ_NCA = $row['Teach_PPIJ_NCA'];
		$PPIJ_YN = $row['Teach_PPIJ_MA'];
		$PPIJ_API = $row['Teach_PPIJ_API'];
?>
			
			<label>Title With Page Numbers</label>
			  <input type="text" class="form-control" name="PPIJ_TNO" value="<?php echo $PPIJ_TNO; ?>"/>
			<label>Journal</label>
			  <input type="text" class="form-control" name="PPIJ_Journal" value="<?php echo $PPIJ_Journal; ?>"/>
			<label>ISSN / ISBN No. </label>
			  <input type="text" class="form-control" name="PPIJ_ISBN" value="<?php echo $PPIJ_ISBN; ?>"/>
			<label> Whether peer reviewed. IMpact factor, if any</label>
			  <input type="text" class="form-control" name="PPIJ_PR" value="<?php echo $PPIJ_PR; ?>"/>
			<label>No. of Co-authors</label>
			  <input type="text" class="form-control" name="PPIJ_NCA" value="<?php echo $PPIJ_NCA; ?>"/>
			<br/><label>Whether you are the main Author</label>

			  <!-- <input type="radio" name="PPIJ_YN" >Yes <input type="radio" name="PPIJ_YN">NO<br /> -->
			  <?php if($PPIJ_YN == "yes"){
							?>
				    		Yes<input type="radio" name="degree" id="optionsRadios1" value="yes" <?php echo "checked" ?>>
						    No<input type="radio" name="degree" id="optionsRadios2" value="no"><br><br>
							<?php 
							   }
							   else{ 
							?>
							   		Yes<input type="radio" name="degree" id="optionsRadios1" value="yes" >
						    No<input type="radio" name="degree" id="optionsRadios2" value="no" <?php echo "checked" ?>><br><br>
							 <?php   }
							?>

			<label>API Score</label>
			 <input type="text" class="form-control required" name="PPIJ_API" value="<?php echo $PPIJ_API; ?>"><br />

<!-- Script for showing data for "Articles Published" tab -->

<?php	
	}
	if($name == 'apb'){
		$sql="SELECT * FROM teach_apb WHERE user_id='$user' and Teach_APB_TNO = '$val' and year='$year'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		 $row = mysqli_fetch_array($result);
 		$APB_TNO  = $row['Teach_APB_TNO'];
 		$APB_BEP  = $row['Teach_APB_BEP'];
 		$APB_ISSN = $row['Teach_APB_ISSN'];
 		$APB_WPR  = $row['Teach_APB_WPR'];
 		$APB_NOC  = $row['Teach_APB_NOC'];
 		$APB_YN   = $row['Teach_APB_MA'];
	    $APB_API  = $row['Teach_APB_API'];
?>
								Rajat
								<label>Title With Page Numbers </label>
								  <input type="text" class="form-control" name="APB_TNO" value="<?php echo $APB_TNO; ?>"/>
								<label>Book Title, Editor And Publisher </label>
								  <input type="text" class="form-control" name="APB_BEP"  value="<?php echo $APB_BEP; ?>"/>
								<label>ISSN / ISBN No.</label> 
								   <input type="text" class="form-control" name="APB_ISSN" value="<?php echo $APB_ISSN; ?>"/>
								<label>Whether peer reviewed. IMpact factor, if any</label>
								  <input type="text" class="form-control" name="APB_WPR" value="<?php echo $APB_WPR; ?>"/>
								<label>No. of Co-authors </label>
								   <input type="text" class="form-control" name="APB_NOC" value="<?php echo $APB_NOC; ?>"/>
								<label>Whether you are the main Author</label> 
							<?php if($APB_YN == "yes"){
							?>
				    		Yes<input type="radio" name="degree" id="optionsRadios1" value="yes" <?php echo "checked" ?>>
						    No<input type="radio" name="degree" id="optionsRadios2" value="no"><br><br>
							<?php 
							   }
							   else{ 
							?>
							   		Yes<input type="radio" name="degree" id="optionsRadios1" value="yes" >
						    No<input type="radio" name="degree" id="optionsRadios2" value="no" <?php echo "checked" ?>><br><br>
							 <?php   }
							?>

								<label>API Score</label> <input type="text" class="form-control required" placeholder="API Score" name="APB_API" value="<?php echo $APB_API; ?>"/><br />
								

<!-- Script for showing data for "Full papers in Conference Proceedings " tab -->

<?php	
	}

	if($name == 'fp'){
		$sql="SELECT * FROM teach_fcp WHERE User_Id='$user' and Teach_FCP_TNO = '$val' and year='$year'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		 $row = mysqli_fetch_array($result);
 		$FCP_TNO = $row['Teach_FCP_TNO'];
 		$FCP_BEP = $row['Teach_FCP_BEP'];
 		$FCP_ISSN = $row['Teach_FCP_ISSN'];
 		$FCP_NOC = $row['Teach_FCP_NOC'];
 		$FCP_MA = $row['Teach_FCP_MA'];
	    $FCP_API = $row['Teach_FCP_API'];

?>
			 <div class="form-group">
						<label> Title With Page Numbers</label>
							<input class="form-control" type="text" name="FCP_TNO" value=" <?php echo $FCP_TNO ?>"/> 
						<label>Details of Conference publications</label>  
							<input class="form-control" type="text" name="FCP_BEP"  value=" <?php echo $FCP_BEP ?>"/> 
						<label>ISSN / ISBN No. </label>
							<input class="form-control" type="text" name="FCP_ISSN" value=" <?php echo $FCP_ISSN ?>"/> 
						<label>No. of Co-authors </label>
							<input class="form-control" type="text" name="FCP_NOC" value=" <?php echo $FCP_NOC ?>"/> 
						 <label> Whether you are the main Author</label>

						 <?php if($FCP_MA == "yes"){
							?>
				    		Yes<input type="radio" name="FCP_YN" id="optionsRadios1" value="yes" <?php echo "checked" ?>>
						    No<input type="radio" name="FCP_YN" id="optionsRadios2" value="no"><br><br>
							<?php 
							   }
							   else{ 
							?>
							   		Yes<input type="radio" name="FCP_YN" id="optionsRadios1" value="yes" >
						    No<input type="radio" name="FCP_YN" id="optionsRadios2" value="no" <?php echo "checked" ?>><br><br>
							 <?php   }
							?>

							
						<label>API Score </label>
							<input class="form-control" type="text" name="FCP_API" value=" <?php echo $FCP_API ?>"/> 
					  </div>
						



<!-- Script for showing data for "Full papers in Conference Proceedings " tab -->

<?php	
	}

	if($name == 'bp'){
		$sql="SELECT * FROM teach_bpe WHERE user_id='$user' and Teach_BPE_TPN = '$val' and year='$year'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		 $row = mysqli_fetch_array($result);
 		$BPE_TPN = $row['Teach_BPE_TPN'];
 		$BPE_TBA = $row['Teach_BPE_TBA'];
 		$BPE_PISSN = $row['Teach_BPE_PISSN'];
 		$BPE_WPR = $row['Teach_BPE_WPR'];
 		$BPE_NOC=$row['Teach_BPE_NOC'];
 		$BPE_MA = $row['Teach_BPE_MA'];
	    $BPE_API = $row['Teach_BPE_API'];
	    

?>
       
            
			
			 <div class="form-group">
						<label>Title With Page Numbers</label>
						<input class="form-control"  type="text" name="BPE_TPN" value="<?php echo $BPE_TPN ?>"> 
						<label>Type of Book And Authorship</label>
						  <input class="form-control" type="text" name="BPE_TBA"  value="<?php echo $BPE_TBA ?>"> 
						<label>Publisher And ISSN / ISBN No</label>
						  <input class="form-control" type="text" name="BPE_PISSN" value="<?php echo $BPE_PISSN ?>"/> 
						<label> Whether Peer Reviewed</label>
						 <input class="form-control" type="text" name="BPE_WPR" value="<?php echo $BPE_WPR ?>"/> 
						<label>No. of Co-authors</label>
						  <input class="form-control" type="text" name="BPE_NOC" value="<?php echo $BPE_NOC ?>"/> 
					   <label>Whether you are the main Author</label>

					   <?php if($BPE_MA == "yes"){
							?>
				    		Yes<input type="radio" name="BPE_YN" id="optionsRadios1" value="yes" <?php echo "checked" ?>>
						    No<input type="radio" name="BPE_YN" id="optionsRadios2" value="no"><br><br>
							<?php 
							   }
							   else{ 
							?>
							   		Yes<input type="radio" name="BPE_YN" id="optionsRadios1" value="yes" >
						    No<input type="radio" name="BPE_YN" id="optionsRadios2" value="no" <?php echo "checked" ?>><br><br>
							 <?php   }
							?>
						 
					   <label>API Score</label>  <input class="form-control" type="text" name="BPE_API" value="<?php echo $BPE_API ?>"/>  
					  </div>
						


<?php
  }

	if($name == 'op'){
		$sql="SELECT * FROM teach_opc WHERE user_id='$user' and Teach_OPC_Title = '$val' and year='$year'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		 $row = mysqli_fetch_array($result);
 		$OPC_Title = $row['Teach_OPC_Title'];
 		$OPC_Agency = $row['Teach_OPC_Agency'];
 		$OPC_Period = $row['Teach_OPC_Period'];
 		$OPC_GAM = $row['Teach_OPC_GAM'];
 		$OPC_API=$row['Teach_OPC_API'];
 		
	    

?>
        
            
			
			<div class="form-group">
							<label>Title</label>
								
							  <input class="form-control" type="text" name="OPC_Title" value="<?php echo $OPC_Title ?>"/> 
							<label>Agency</label>
							  <input class="form-control" type="text" name="OPC_Agency" value="<?php echo $OPC_Agency ?>"/> 
							<label>Period</label>
							  <input class="form-control" type="text" name="OPC_Period" value="<?php echo $OPC_Period ?>"/> 
							<label>Grant / Amount Mobilized (Rs. Lakh)</label>
							  <input class="form-control" type="text" name="OPC_GAM" value="<?php echo $OPC_GAM ?>"/> 
						   <label>API Score</label>  <input class="form-control" type="text" name="OPC_API" value="<?php echo $OPC_API ?>"/>  
					  </div>
					


<?php
  }

  if($name == 'cp'){
		$sql="SELECT * from teach_cpc where user_id='$user' and year='$year' and teach_CPC_Title='$val'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		 $row = mysqli_fetch_array($result);
 		$CPC_Title = $row['Teach_CPC_Title'];
 		$CPC_Agency = $row['Teach_CPC_Agency'];
 		$CPC_Period = $row['Teach_CPC_Period'];
 		$CPC_GAM = $row['Teach_CPC_GAM'];
 		$CPC_WPD = $row['Teach_CPC_WPD'];
 		$CPC_API=$row['Teach_CPC_API'];
?>
			 <div class="form-group">
						<label>Title</label>
							<input class="form-control" type="text" name="CPC_Title" value="<?php echo $CPC_Title ?>"/> 							   
						 <label>Agency</label>
						   <input class="form-control" type="text" name="CPC_Agency" value="<?php echo $CPC_Agency ?>"/> 
						 <label>Period</label>
						  <input class="form-control" type="text" name="CPC_Period" value="<?php echo $CPC_Period ?>"/> 
						 <label>Grant / Amount Mobilized (Rs. Lakh)</label>
						   <input class="form-control" type="text" name="CPC_GAM" value="<?php echo $CPC_GAM ?>"/> 
						 <label>Whether policy document / Patent as outcome</label>
						   <input class="form-control" type="text" name="CPC_WPD" value="<?php echo $CPC_WPD ?>"/> 
						 <label>API Score</label>
							 <input class="form-control" type="text" name="CPC_API" value="<?php echo $CPC_API ?>"/> 
					  </div>					
<?php
  }

   if($name == 'rg'){
		$sql="SELECT * from teach_rg where user_id='$user' and year='$year' and teach_RG_NE='$val'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		 $row = mysqli_fetch_array($result);
 		$RG_NE = $row['Teach_RG_NE'];
 		$RG_TS = $row['Teach_RG_TS'];
 		$RG_DA = $row['Teach_RG_DA'];
 		
 		$RG_API=$row['Teach_RG_API'];
 			   
?>
                   			
			 <div class="form-group">
							<label>Number Enrolled</label>
							<input class="form-control" type="text" name="RG_NE" value="<?php echo $RG_NE ?>"/> 							
						   <label>Thesis Submitted</label>
							<input class="form-control" type="text" name="RG_TS" value="<?php echo $RG_TS ?>"/> 
						   <label>Degree Awarded</label>  
							 <input class="form-control" type="text" name="RG_DA" value="<?php echo $RG_DA ?>"/>  
						  <label>API Score </label> 
							 <input class="form-control" type="text" name="RG_API" value="<?php echo $RG_API ?>"/>
					  </div>
					
<?php
  }
  
   if($name == 'ppf'){
		$sql="SELECT * from teach_fdp where user_id='$user' and year='$year' and teach_FDP_Programme='$val'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		 $row = mysqli_fetch_array($result);
 		$FDP_Programme = $row['Teach_FDP_Programme'];
 		$FDP_Duration = $row['Teach_FDP_Duration'];
 		$FDP_Organized = $row['Teach_FDP_Organized'];
 		
 		$FDP_API=$row['Teach_FDP_API'];
 		
?>
				 <div class="form-group">
							<label>Programme </label>
							<input class="form-control" type="text" name="FDP_Programme" value="<?php echo $FDP_Programme ?>"/> 	
						   <label> Duration </label>
							<input class="form-control" type="text" name="FDP_Duration" value="<?php echo $FDP_Duration ?>"/> 
							<label>Organized By </label>
							 <input class="form-control" type="text" name="FDP_Organized" value="<?php echo $FDP_Organized ?>"/>  
							<label>API Score </label>
							 <input class="form-control" type="text" name="FDP_API" value="<?php echo $FDP_API ?>"/> 
					  </div>
					
<?php
  }

   if($name == 'pc'){
		$sql="SELECT * from teach_ppc where user_id='$user' and year='$year' and teach_PPC_TPP='$val'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		 $row = mysqli_fetch_array($result);
 		$PPC_TPP = $row['Teach_PPC_TPP'];
 		$PPC_TCS = $row['Teach_PPC_TCS'];
 		$PPC_DOE = $row['Teach_PPC_DOE'];
 		$PPC_Organized = $row['Teach_PPC_Organized'];
 		$PPC_WINS = $row['Teach_PPC_WINS'];
 		$PPC_API=$row['Teach_PPC_API'];
 		
?>                   			
			 <div class="form-group">
							<label>Title of the Paper Presented</label>
							 <input class="form-control" type="text" name="PPC_TPP" value="<?php echo $PPC_TPP ?>"/>  	
						   <label>Title Conference / Seminar etc.</label> 
							 <input class="form-control" type="text" name="PPC_TCS" value="<?php echo $PPC_TCS ?>"/>  
						   <label>Date (s) of the Event </label>
							 <input class="form-control" type="text" name="PPC_DOE" value="<?php echo $PPC_DOE ?>"/>  
						   <label>Organized By</label>
							 <input class="form-control" type="text" name="PPC_Organized" value="<?php echo $PPC_Organized ?>"/>  
						   <label>Whether International / National / State</label>
							<input class="form-control" type="text" name="PPC_WINS" value="<?php echo $PPC_WINS ?>"/>   
						   <label>API Score</label>
							 <input class="form-control" type="text" name="PPC_API" value="<?php echo $PPC_API ?>"/> 
					  </div>
					
<?php
	  }
  
  if($name == 'il'){
  	
		$sql="SELECT * from teach_ilc where user_id='$user' and year='$year' and Teach_ILC_TOL='$val'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		 $row = mysqli_fetch_array($result);
 		 $ILC_TOL = $row['Teach_ILC_TOL'];
 		$ILC_TCS = $row['Teach_ILC_TCS'];
 		 $ILC_DOE = $row['Teach_ILC_DOE'];
 		$ILC_Organized = $row['Teach_ILC_Organized'];
 		$ILC_WINS = $row['Teach_ILC_WINS'];
 		$ILC_API=$row['Teach_ILC_API'];
 	
?>
       
            
			
			 <div class="form-group">
							<label>Title of the Lecture / Academic Session</label>
							 <input class="form-control" type="text" name="ILC_TOL" value="<?php echo $ILC_TOL ?>"/> 	
						   <label>Title Conference / Seminar etc.</label>
							<input class="form-control" type="text" name="ILC_TCS" value="<?php echo $ILC_TCS ?>"/> 
							<label>Date (s) of the Event</label>
							 <input class="form-control" type="text" name="ILC_DOE" value="<?php echo $ILC_DOE ?>"/> 
						   <label>Organized By</label>
							 <input class="form-control" type="text" name="ILC_Organized" value="<?php echo $ILC_Organized ?>"/> 
						  <label> Whether International / National / State</label>
							<input class="form-control" type="text" name="ILC_WINS" value="<?php echo $ILC_WINS ?>"/> 
						   <label>API Score</label>
							 <input class="form-control" type="text" name="ILC_API" value="<?php echo $ILC_API ?>"/> 
			</div>
						

<?php
  }
?>
  





